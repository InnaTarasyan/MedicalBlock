import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

function debounce(fn, wait) {
	let t;
	return function (...args) {
		clearTimeout(t);
		t = setTimeout(() => fn.apply(this, args), wait);
	};
}

// AJAX search for blog page
function initBlogAjaxSearch() {
	const searchForm = document.getElementById('blog-search-form');
	const searchInput = document.getElementById('blog-search-input');
	const clearButton = document.getElementById('blog-search-clear');
	const articlesContainer = document.getElementById('blog-articles-container');
	const loadingIndicator = document.getElementById('blog-loading');
	
	if (!searchForm || !searchInput || !articlesContainer) {
		return;
	}

	let searchAbortController = null;
	let isInitialized = false;

	const showLoading = () => {
		if (loadingIndicator) {
			loadingIndicator.classList.remove('hidden');
		}
		if (articlesContainer) {
			articlesContainer.style.opacity = '0.5';
			articlesContainer.style.pointerEvents = 'none';
		}
	};

	const hideLoading = () => {
		if (loadingIndicator) {
			loadingIndicator.classList.add('hidden');
		}
		if (articlesContainer) {
			articlesContainer.style.opacity = '1';
			articlesContainer.style.pointerEvents = 'auto';
		}
	};

	const performSearch = debounce(async (searchTerm) => {
		if (searchAbortController) {
			searchAbortController.abort();
		}
		searchAbortController = new AbortController();

		showLoading();

		try {
			const url = new URL(searchForm.action, window.location.origin);
			const formData = new FormData(searchForm);
			
			// Add all form data to URL
			for (const [key, value] of formData.entries()) {
				if (value && value.trim() !== '') {
					url.searchParams.set(key, value);
				} else {
					url.searchParams.delete(key);
				}
			}

			const response = await fetch(url.toString(), {
				headers: {
					'Accept': 'application/json',
					'X-Requested-With': 'XMLHttpRequest',
				},
				signal: searchAbortController.signal,
			});

			if (!response.ok) {
				throw new Error('Search failed');
			}

			const data = await response.json();

			if (data.html) {
				articlesContainer.innerHTML = data.html;
				
				// Smooth scroll to top of articles
				articlesContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}

			// Update URL without reload
			if (data.url) {
				history.pushState({}, '', data.url);
			}

			// Update clear button visibility
			if (clearButton) {
				const currentValue = searchInput.value.trim();
				if (currentValue !== '') {
					clearButton.classList.remove('hidden');
				} else {
					clearButton.classList.add('hidden');
				}
			}

		} catch (error) {
			if (error.name !== 'AbortError') {
				console.error('Search error:', error);
			}
		} finally {
			hideLoading();
		}
	}, 350);

	// Handle input
	searchInput.addEventListener('input', (e) => {
		const value = e.target.value.trim();
		performSearch(value);
	});

	// Handle clear button
	if (clearButton) {
		clearButton.addEventListener('click', (e) => {
			e.preventDefault();
			searchInput.value = '';
			searchInput.focus();
			clearButton.classList.add('hidden');
			performSearch('');
		});
	}

	// Handle form submission (prevent default)
	searchForm.addEventListener('submit', (e) => {
		e.preventDefault();
		performSearch(searchInput.value.trim());
	});

	// Handle pagination clicks (delegation)
	articlesContainer.addEventListener('click', async (e) => {
		const link = e.target.closest('a');
		if (!link) return;

		// Check if it's a pagination link
		const href = link.getAttribute('href');
		if (!href) return;

		// Check if link is within pagination container
		const isInPagination = link.closest('.pagination') || link.closest('[role="navigation"]');
		if (!isInPagination) return;

		// Check if it's a pagination link (has page parameter or is a pagination link)
		try {
			const url = new URL(href, window.location.origin);
			if (!url.searchParams.has('page') && !href.includes('page=')) {
				return;
			}
		} catch (e) {
			return;
		}

		e.preventDefault();

		showLoading();

		try {
			const url = new URL(href, window.location.origin);
			
			// Preserve search query and topic
			if (searchInput.value.trim()) {
				url.searchParams.set('q', searchInput.value.trim());
			}
			const formData = new FormData(searchForm);
			if (formData.get('topic')) {
				url.searchParams.set('topic', formData.get('topic'));
			}

			const response = await fetch(url.toString(), {
				headers: {
					'Accept': 'application/json',
					'X-Requested-With': 'XMLHttpRequest',
				},
			});

			if (!response.ok) {
				throw new Error('Pagination failed');
			}

			const data = await response.json();

			if (data.html) {
				articlesContainer.innerHTML = data.html;
				articlesContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}

			// Update URL using replaceState for pagination
			if (data.url) {
				history.replaceState({}, '', data.url);
			}

		} catch (error) {
			console.error('Pagination error:', error);
		} finally {
			hideLoading();
		}
	});

	// Handle browser back/forward buttons
	// Only handle if page is fully loaded and elements exist
	window.addEventListener('popstate', () => {
		// Only handle if we're initialized and on blog page
		if (!isInitialized || !window.location.pathname.includes('/blog')) {
			return;
		}

		// Double-check elements exist (they should if initialized, but be safe)
		const currentArticlesContainer = document.getElementById('blog-articles-container');
		if (!currentArticlesContainer) {
			// Page was reloaded, let browser handle it
			return;
		}

		// Simply reload the page - this is the most reliable approach
		// It ensures all state is correct and prevents any conflicts
		window.location.reload();
	});

	// Mark as initialized after a short delay to ensure DOM is ready
	setTimeout(() => {
		isInitialized = true;
	}, 500);

	// Initialize clear button visibility
	if (clearButton) {
		if (searchInput.value.trim()) {
			clearButton.classList.remove('hidden');
		} else {
			clearButton.classList.add('hidden');
		}
	}
}

document.addEventListener('DOMContentLoaded', initBlogAjaxSearch);
