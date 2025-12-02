<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column"><?php dynamic_sidebar('footer-1'); ?></div>
            <div class="footer-column"><?php dynamic_sidebar('footer-2'); ?></div>
            <div class="footer-column"><?php dynamic_sidebar('footer-3'); ?></div>
        </div>
        
        <div class="copyrights" style="border-top: 1px solid var(--border); margin-top: 3rem; padding-top: 1.5rem; text-align: center; font-size: 0.85rem; color: var(--text-muted);">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </div>
    </div>
</footer>

<!-- Floating Dark Mode Toggle (Hidden until hover) -->
<button id="theme-toggle" aria-label="Toggle Dark Mode">
    <span id="toggle-icon">🌙</span>
</button>

<script>
    // Theme Toggle Logic
    const toggleBtn = document.getElementById('theme-toggle');
    const icon = document.getElementById('toggle-icon');
    const body = document.body;

    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark');
        icon.textContent = '☀️';
    }

    toggleBtn.addEventListener('click', () => {
        body.classList.toggle('dark');
        const isDark = body.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        icon.textContent = isDark ? '☀️' : '🌙';
    });

    // Search Toggle Logic
    const searchToggle = document.getElementById('header-search-toggle');
    const searchOverlay = document.getElementById('search-overlay');
    const searchClose = document.getElementById('search-close');
    const searchInput = document.querySelector('#search-overlay .search-field');

    if (searchToggle) {
        searchToggle.addEventListener('click', () => {
            // Force flex display via style if class isn't enough in some cases
            searchOverlay.style.display = 'flex';
            // Slight delay to allow display change before opacity transition
            setTimeout(() => {
                searchOverlay.classList.add('active');
                if (searchInput) searchInput.focus();
            }, 10);
        });
    }
    
    function closeSearch() {
        searchOverlay.classList.remove('active');
        // Wait for transition to finish before hiding
        setTimeout(() => {
            searchOverlay.style.display = 'none';
        }, 300);
    }

    if (searchClose) {
        searchClose.addEventListener('click', closeSearch);
    }
    
    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
            closeSearch();
        }
    });

    // Copy to Clipboard Logic
    document.addEventListener('DOMContentLoaded', () => {
        const preBlocks = document.querySelectorAll('pre');
        preBlocks.forEach((pre) => {
            // Check if wrapper already exists (to prevent dupes if JS runs twice)
            if (pre.parentNode.classList.contains('code-wrapper')) return;

            // Create Wrapper
            const wrapper = document.createElement('div');
            wrapper.className = 'code-wrapper';
            
            // Insert wrapper before pre
            pre.parentNode.insertBefore(wrapper, pre);
            // Move pre inside wrapper
            wrapper.appendChild(pre);

            // Create Button
            const btn = document.createElement('button');
            btn.className = 'copy-btn';
            btn.innerText = 'Copy';
            wrapper.appendChild(btn);

            // Add Click Event
            btn.addEventListener('click', () => {
                const code = pre.innerText;
                navigator.clipboard.writeText(code).then(() => {
                    btn.innerText = 'Copied!';
                    setTimeout(() => { btn.innerText = 'Copy'; }, 2000);
                });
            });
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
