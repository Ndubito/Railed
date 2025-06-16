<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Railed</title>
    <link rel="stylesheet" href="/index.css">
    <style>
        
        /* Checkout Content */
        .checkout-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 60px;
        }

        .checkout-main {
            background: #fff;
        }

        .checkout-sidebar {
            background: #f8f8f8;
            padding: 30px;
            border-radius: 8px;
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #000;
        }

        .checkout-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e5e5e5;
        }

        .checkout-section:last-child {
            border-bottom: none;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #000;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
            color: #000;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            background: #fff;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #000;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            background: #fff;
            cursor: pointer;
        }

        .form-select:focus {
            outline: none;
            border-color: #000;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .checkbox {
            width: 16px;
            height: 16px;
        }

        .checkbox-label {
            font-size: 14px;
            color: #666;
        }

        /* Order Summary */
        .order-summary h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #000;
        }

        .order-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        .item-image {
            width: 80px;
            height: 80px;
            background: #f0f0f0;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .item-details {
            flex: 1;
        }

        .item-brand {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .item-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #000;
        }

        .item-size {
            font-size: 12px;
            color: #666;
        }

        .item-price {
            font-size: 16px;
            font-weight: 700;
            color: #000;
        }

        .order-totals {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e5e5;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .total-row.final {
            font-size: 18px;
            font-weight: 700;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e5e5e5;
        }

        .complete-order-btn {
            width: 100%;
            background: #000;
            color: #fff;
            padding: 16px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 20px;
        }

        .complete-order-btn:hover {
            background: #333;
        }

        .security-info {
            margin-top: 15px;
            padding: 15px;
            background: #f0f8ff;
            border-radius: 4px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }

        /* Footer */
        .footer {
            background: #000;
            color: #fff;
            padding: 60px 20px 30px;
            margin-top: 60px;
        }

       
            .checkout-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .checkout-sidebar {
                order: -1;
                position: relative;
                top: auto;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <!-- Mobile left icons -->
            <div class="mobile-icons">
                <svg class="mobile-icon" viewBox="0 0 24 24">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                <svg class="mobile-icon" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </div>
            
            <a href="#" class="logo">RAILED</a>
            
            <!-- Desktop search -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search for anything">
            </div>
            
            <!-- Desktop navigation -->
            <nav class="nav-links">
                <a href="#" class="nav-link">SIGN IN</a>
                <a href="#" class="nav-link">SIGN UP</a>
                <a href="#" class="sell-btn">Sell</a>
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
            <div class="nav-category">
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

    <!-- Checkout Content -->
    <div class="checkout-container">
        <div class="checkout-main">
            <h1 class="page-title">Checkout</h1>

            <!-- Shipping Address -->
            <div class="checkout-section">
                <h2 class="section-title">Shipping Address</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-input" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-input" placeholder="Enter last name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-input" placeholder="Street address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Apartment, suite, etc. (optional)">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-input" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label class="form-label">State</label>
                        <select class="form-select">
                            <option>Select state</option>
                            <option>California</option>
                            <option>New York</option>
                            <option>Texas</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">ZIP Code</label>
                        <input type="text" class="form-input" placeholder="ZIP code">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Country</label>
                        <select class="form-select">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>United Kingdom</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Payment Method -->
            <div class="checkout-section">
                <h2 class="section-title">Payment Method</h2>
                <div class="form-group">
                    <label class="form-label">Card Number</label>
                    <input type="text" class="form-input" placeholder="1234 5678 9012 3456">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Expiry Date</label>
                        <input type="text" class="form-input" placeholder="MM/YY">
                    </div>
                    <div class="form-group">
                        <label class="form-label">CVV</label>
                        <input type="text" class="form-input" placeholder="123">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Cardholder Name</label>
                    <input type="text" class="form-input" placeholder="Name on card">
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" class="checkbox" id="billing-same">
                    <label for="billing-same" class="checkbox-label">Billing address same as shipping</label>
                </div>
            </div>

            <!-- Order Notes -->
            <div class="checkout-section">
                <h2 class="section-title">Order Notes (Optional)</h2>
                <div class="form-group">
                    <textarea class="form-input" rows="4" placeholder="Special delivery instructions or notes..."></textarea>
                </div>
            </div>
        </div>

        <!-- Order Summary Sidebar -->
        <div class="checkout-sidebar">
            <div class="order-summary">
                <h3>Order Summary</h3>
                
                <div class="order-item">
                    <div class="item-image">👕</div>
                    <div class="item-details">
                        <div class="item-brand">Supreme</div>
                        <div class="item-title">Box Logo Hoodie</div>
                        <div class="item-size">Size M</div>
                    </div>
                    <div class="item-price">$450</div>
                </div>

                <div class="order-item">
                    <div class="item-image">👟</div>
                    <div class="item-details">
                        <div class="item-brand">Nike</div>
                        <div class="item-title">Air Jordan 1 Retro High</div>
                        <div class="item-size">Size 10</div>
                    </div>
                    <div class="item-price">$325</div>
                </div>

                <div class="order-totals">
                    <div class="total-row">
                        <span>Subtotal</span>
                        <span>$775.00</span>
                    </div>
                    <div class="total-row">
                        <span>Shipping</span>
                        <span>$15.00</span>
                    </div>
                    <div class="total-row">
                        <span>Tax</span>
                        <span>$62.00</span>
                    </div>
                    <div class="total-row final">
                        <span>Total</span>
                        <span>$852.00</span>
                    </div>
                </div>

                <button class="complete-order-btn">Complete Order</button>

                <div class="security-info">
                    🔒 Your payment information is secure and encrypted
                </div>
            </div>
        </div>
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
            // Form validation and interaction
            const inputs = document.querySelectorAll('.form-input, .form-select');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.borderColor = '#000';
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.style.borderColor = '#ddd';
                    }
                });
            });

            // Complete order button
            const completeOrderBtn = document.querySelector('.complete-order-btn');
            completeOrderBtn.addEventListener('click', function() {
                // Add loading state
                this.innerHTML = 'Processing...';
                this.disabled = true;
                
                // Simulate processing
                setTimeout(() => {
                    alert('Order completed successfully!');
                    this.innerHTML = 'Complete Order';
                    this.disabled = false;
                }, 2000);
            });

            // Billing same as shipping checkbox
            const billingSameCheckbox = document.getElementById('billing-same');
            billingSameCheckbox.addEventListener('change', function() {
                // In a real implementation, this would copy shipping address to billing
                console.log('Billing same as shipping:', this.checked);
            });
        });
    </script>
</body>
</html>