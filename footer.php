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
            searchOverlay.style.display = 'flex';
            setTimeout(() => {
                searchOverlay.classList.add('active');
                if (searchInput) searchInput.focus();
            }, 10);
        });
    }
    
    function closeSearch() {
        searchOverlay.classList.remove('active');
        setTimeout(() => {
            searchOverlay.style.display = 'none';
        }, 300);
    }

    if (searchClose) searchClose.addEventListener('click', closeSearch);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && searchOverlay.classList.contains('active')) closeSearch();
    });

    // Copy to Clipboard Logic
    document.addEventListener('DOMContentLoaded', () => {
        const preBlocks = document.querySelectorAll('pre');
        preBlocks.forEach((pre) => {
            if (pre.parentNode.classList.contains('code-wrapper')) return;
            const wrapper = document.createElement('div');
            wrapper.className = 'code-wrapper';
            pre.parentNode.insertBefore(wrapper, pre);
            wrapper.appendChild(pre);
            const btn = document.createElement('button');
            btn.className = 'copy-btn';
            btn.innerText = 'Copy';
            wrapper.appendChild(btn);
            btn.addEventListener('click', () => {
                navigator.clipboard.writeText(pre.innerText).then(() => {
                    btn.innerText = 'Copied!';
                    setTimeout(() => { btn.innerText = 'Copy'; }, 2000);
                });
            });
        });

        // Comment Tree Toggle Logic
        const nestedComments = document.querySelectorAll('.comment-list .children');
        nestedComments.forEach(childList => {
            const parentLi = childList.parentElement;
            if (parentLi.querySelector('.comment-toggle')) return; // Prevent dupes

            const toggleBtn = document.createElement('button');
            toggleBtn.className = 'comment-toggle';
            toggleBtn.innerText = '-';
            toggleBtn.setAttribute('aria-label', 'Collapse replies');
            
            // Insert before the nested list
            childList.parentNode.insertBefore(toggleBtn, childList);

            toggleBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                childList.classList.toggle('hidden');
                const isHidden = childList.classList.contains('hidden');
                toggleBtn.innerText = isHidden ? '+' : '-';
                toggleBtn.setAttribute('aria-label', isHidden ? 'Expand replies' : 'Collapse replies');
            });
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
