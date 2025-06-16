<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railed: Browse Catalog</title>
    <link rel="stylesheet" href="/index.css">
    <style>

        .nav-category.active > a {
            color: #000;
            border-bottom: 2px solid #000;
            padding-bottom: 13px;
        }

        /* Catalog Container */
        .catalog-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 40px;
        }

        /* Filters Sidebar */
        .filters-sidebar {
            background: #f8f8f8;
            padding: 30px;
            border-radius: 8px;
            height: fit-content;
            position: sticky;
            top: 120px;
        }

        .filters-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #000;
        }

        .filter-group {
            margin-bottom: 30px;
        }

        .filter-group-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            transition: color 0.2s;
        }

        .filter-option:hover {
            color: #000;
        }

        .filter-checkbox {
            width: 16px;
            height: 16px;
        }

        .price-range {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .price-input {
            width: 80px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .clear-filters {
            background: none;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
            width: 100%;
            margin-top: 20px;
        }

        .clear-filters:hover {
            border-color: #000;
            background: #f8f8f8;
        }

        /* Catalog Content */
        .catalog-content {
            min-height: 100vh;
        }

        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        .catalog-title {
            font-size: 28px;
            font-weight: 700;
            color: #000;
        }

        .catalog-info {
            font-size: 14px;
            color: #666;
        }

        .sort-options {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .sort-label {
            font-size: 14px;
            color: #666;
        }

        .sort-select {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            background: #fff;
        }

        .view-toggle {
            display: flex;
            gap: 5px;
        }

        .view-btn {
            padding: 8px 12px;
            border: 1px solid #ddd;
            background: #fff;
            cursor: pointer;
            transition: all 0.2s;
        }

        .view-btn.active {
            background: #000;
            color: #fff;
            border-color: #000;
        }       

        .product-grid.list-view {
            grid-template-columns: 1fr;
        }

        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s;
            border: 1px solid #e5e5e5;
            cursor: pointer;
        }

        .product-image {
            width: 100%;
            height: 300px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: #ccc;
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #000;
            color: #fff;
            padding: 4px 8px;
            font-size: 12px;
            border-radius: 4px;
            font-weight: 600;
        }

        .product-badge.sold {
            background: #ff4444;
        }

        .product-badge.new {
            background: #00aa44;
        }

        .product-price {
            font-size: 18px;
            font-weight: 700;
            color: #000;
            margin-bottom: 5px;
        }

        .product-size {
            font-size: 12px;
            color: #666;
            margin-bottom: 10px;
        }

        .product-condition {
            font-size: 12px;
            color: #666;
            background: #f0f0f0;
            padding: 4px 8px;
            border-radius: 4px;
            display: inline-block;
        }

        /* List View Specific Styles */
        .product-card.list-item {
            display: grid;
            grid-template-columns: 200px 1fr;
            height: 200px;
        }

        .product-card.list-item .product-image {
            height: 100%;
        }

        .product-card.list-item .product-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 60px;
            padding: 40px 0;
        }

        .pagination-btn {
            padding: 10px 15px;
            border: 1px solid #ddd;
            background: #fff;
            cursor: pointer;
            transition: all 0.2s;
            border-radius: 4px;
        }

        .pagination-btn:hover {
            border-color: #000;
        }

        .pagination-btn.active {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        

       
        /* Responsive */
        @media (max-width: 968px) {
            .catalog-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .filters-sidebar {
                position: static;
                order: 2;
            }

            .catalog-header {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }

            .sort-options {
                width: 100%;
                justify-content: space-between;
            }
        }

        
            .product-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 15px;
            }

            .product-card.list-item {
                grid-template-columns: 1fr;
                height: auto;
            }

            .filters-sidebar {
                padding: 20px;
            }
        
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="mobile-icons">
                <svg class="mobile-icon" viewBox="0 0 24 24">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                <svg class="mobile-icon" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </div>

            <a href="index.html" class="logo">RAILED</a>
            
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search for anything" id="searchInput">
            </div>
            
            <nav class="nav-links">
                <a href="login.html" class="nav-link">SIGN IN</a>
                <a href="login.html" class="nav-link">SIGN UP</a>
                <a href="sell.html" class="sell-btn">Sell</a>
            </nav>

            <!-- Mobile right icons -->
            <div class="mobile-icons">
                <a href="#" class="nav-link" style="font-size: 12px; margin-right: 10px;">SIGN IN</a>
                <a href="#" class="nav-link" style="font-size: 12px; margin-right: 10px;">SIGN UP</a>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="main-nav-content">
            <div class="nav-category">
                <a href="#">Designers</a>
            </div>
            <div class="nav-category active">
                <a href="#">Menswear</a>
            </div>
            <div class="nav-category">
                <a href="#">Womenswear</a>
            </div>
            <div class="nav-category">
                <a href="#">Sneakers</a>
            </div>
            <div class="nav-category">
                <a href="#">Staff Picks</a>
            </div>
            <div class="nav-category">
                <a href="#">Collections</a>
            </div>
            <div class="nav-category">
                <a href="#">Editorial</a>
            </div>
        </div>
    </nav>

    <!-- Catalog Container -->
    <div class="catalog-container">
        <!-- Filters Sidebar -->
        <aside class="filters-sidebar">
            <h3 class="filters-title">Filters</h3>
            
            <div class="filter-group">
                <h4 class="filter-group-title">Category</h4>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        T-Shirts & Polos
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Hoodies & Sweatshirts
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Jackets & Coats
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Jeans & Denim
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Sneakers
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h4 class="filter-group-title">Brand</h4>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Supreme
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Chrome Hearts
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Rick Owens
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Stone Island
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Balenciaga
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h4 class="filter-group-title">Size</h4>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        XS
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        S
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        M
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        L
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        XL
                    </label>
                </div>
            </div>

            <div class="filter-group">
                <h4 class="filter-group-title">Price Range</h4>
                <div class="price-range">
                    <input type="number" class="price-input" placeholder="Min" min="0">
                    <span>-</span>
                    <input type="number" class="price-input" placeholder="Max" min="0">
                </div>
            </div>

            <div class="filter-group">
                <h4 class="filter-group-title">Condition</h4>
                <div class="filter-options">
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        New with Tags
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        New without Tags
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Very Good
                    </label>
                    <label class="filter-option">
                        <input type="checkbox" class="filter-checkbox">
                        Good
                    </label>
                </div>
            </div>

            <button class="clear-filters">Clear All Filters</button>
        </aside>

        <!-- Catalog Content -->
        <main class="catalog-content">
            <div class="catalog-header">
                <div>
                    <h1 class="catalog-title">Menswear</h1>
                    <p class="catalog-info">1,247 items available</p>
                </div>
                
                <div class="sort-options">
                    <span class="sort-label">Sort by:</span>
                    <select class="sort-select">
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Most Popular</option>
                        <option>Brand A-Z</option>
                    </select>
                    
                    <div class="view-toggle">
                        <button class="view-btn active" data-view="grid">⊞</button>
                        <button class="view-btn" data-view="list">☰</button>
                    </div>
                </div>
            </div>

            <div class="product-grid" id="productGrid">
                <div class="product-card">
                    <div class="product-image">
                        <div class="product-badge new">NEW</div>
                        👕
                    </div>
                    <div class="product-info">
                        <div class="product-brand">Supreme</div>
                        <div class="product-title">Box Logo Hoodie Black</div>
                        <div class="product-price">$450</div>
                        <div class="product-size">Size M</div>
                        <div class="product-condition">New with Tags</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">👟</div>
                    <div class="product-info">
                        <div class="product-brand">Nike</div>
                        <div class="product-title">Air Jordan 1 Retro High Chicago</div>
                        <div class="product-price">$325</div>
                        <div class="product-size">Size 10</div>
                        <div class="product-condition">Very Good</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🧥</div>
                    <div class="product-info">
                        <div class="product-brand">Stone Island</div>
                        <div class="product-title">Nylon Metal Jacket Navy</div>
                        <div class="product-price">$275</div>
                        <div class="product-size">Size L</div>
                        <div class="product-condition">Good</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <div class="product-badge sold">SOLD</div>
                        👖
                    </div>
                    <div class="product-info">
                        <div class="product-brand">Chrome Hearts</div>
                        <div class="product-title">Cross Patch Jeans Black</div>
                        <div class="product-price">$850</div>
                        <div class="product-size">Size 32</div>
                        <div class="product-condition">New without Tags</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">👕</div>
                    <div class="product-info">
                        <div class="product-brand">Rick Owens</div>
                        <div class="product-title">DRKSHDW Cotton Tee</div>
                        <div class="product-price">$120</div>
                        <div class="product-size">Size S</div>
                        <div class="product-condition">Very Good</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <div class="product-badge new">NEW</div>
                        🧥
                    </div>
                    <div class="product-info">
                        <div class="product-brand">Balenciaga</div>
                        <div class="product-title">Triple S Sneakers White</div>
                        <div class="product-price">$695</div>
                        <div class="product-size">Size 42</div>
                        <div class="product-condition">New with Tags</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">👕</div>
                    <div class="product-info">
                        <div class="product-brand">Comme des Garçons</div>
                        <div class="product-title">PLAY Heart Logo Tee</div>
                        <div class="product-price">$85</div>
                        <div class="product-size">Size M</div>
                        <div class="product-condition">Good</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🧥</div>
                    <div class="product-info">
                        <div class="product-brand">Kapital</div>
                        <div class="product-title">Kountry Smiley Cardigan</div>
                        <div class="product-price">$340</div>
                        <div class="product-size">Size L</div>
                        <div class="product-condition">Very Good</div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="pagination-btn">&lt;</button>
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn">4</button>
                <button class="pagination-btn">5</button>
                <button class="pagination-btn">&gt;</button>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">Authentication</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Selling</h3>
                    <ul class="footer-links">
                        <li><a href="#">Start Selling</a></li>
                        <li><a href="#">Seller Fees</a></li>
                        <li><a href="#">Seller Protection</a></li>
                        <li><a href="#">Seller Guide</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Legal</h3>
                    <ul class="footer-links">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Prohibited Items</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Railed. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // View toggle functionality
            const viewButtons = document.querySelectorAll('.view-btn');
            const productGrid = document.getElementById('productGrid');
            
            viewButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    viewButtons.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const view = this.dataset.view;
                    if (view === 'list') {
                        productGrid.classList.add('list-view');
                        // Add list-item class to all product cards
                        document.querySelectorAll('.product-card').forEach(card => {
                            card.classList.add('list-item');
                        });
                    } else {
                        productGrid.classList.remove('list-view');
                        // Remove list-item class from all product cards
                        document.querySelectorAll('.product-card').forEach(card => {
                            card.classList.remove('list-item');
                        });
                    }
                });
            });

            // Filter functionality
            const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
            filterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Add filter logic here
                    console.log('Filter changed:', this.parentElement.textContent.trim());
                });
            });

            // Clear filters
            const clearFiltersBtn = document.querySelector('.clear-filters');
            clearFiltersBtn.addEventListener('click', function() {
                filterCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                document.querySelectorAll('.price-input').forEach(input => {
                    input.value = '';
                });
            });

            // Sort functionality
            const sortSelect = document.querySelector('.sort-select');
            sortSelect.addEventListener('change', function() {
                console.log('Sort changed to:', this.value);
                // Add sorting logic here
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
                console.log('Search query:', this.value);
                // Add search logic here
            });

            // Product card click
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Navigate to product detail page
                    console.log('Navigate to product detail');
                });
            });

            // Pagination
            const paginationBtns = document.querySelectorAll('.pagination-btn');
            paginationBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!isNaN(this.textContent)) {
                        // Remove active from all
                        paginationBtns.forEach(b => b.classList.remove('active'));
                        // Add active to clicked
                        this.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>