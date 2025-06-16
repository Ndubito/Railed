<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Your Item - Railed</title>
    <link rel="stylesheet" href="/index.css">
    <style>
       
        /* Listing Page Specific Styles */
        .listing-hero {
            background: linear-gradient(135deg, #000 0%, #333 100%);
            color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        .listing-hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .listing-hero h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .listing-hero p {
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.5;
        }

        /* Listing Form */
        .listing-form-section {
            padding: 80px 20px;
            background: #f8f8f8;
            min-height: calc(100vh - 200px);
        }

        .section-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .listing-form {
            background: #fff;
            padding: 60px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid #e5e5e5;
        }

        .form-section {
            margin-bottom: 50px;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .form-section-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #000;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-icon {
            font-size: 28px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-input,
        .form-select,
        .form-textarea {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s;
            background: #fff;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #000;
            box-shadow: 0 0 0 3px rgba(0,0,0,0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .price-input-group {
            position: relative;
        }

        .price-input-group::before {
            content: '$';
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: 600;
            color: #666;
        }

        .price-input {
            padding-left: 35px;
        }

        /* Photo Upload */
        .photo-upload-area {
            border: 2px dashed #ddd;
            border-radius: 12px;
            padding: 60px 30px;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
            background: #fafafa;
        }

        .photo-upload-area:hover {
            border-color: #000;
            background: #f5f5f5;
        }

        .photo-upload-area.dragover {
            border-color: #000;
            background: #f0f0f0;
            transform: scale(1.02);
        }

        .upload-icon {
            font-size: 48px;
            margin-bottom: 20px;
            color: #666;
        }

        .upload-text {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #000;
        }

        .upload-subtext {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .upload-button {
            display: inline-block;
            background: #000;
            color: #fff;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .upload-button:hover {
            background: #333;
            transform: translateY(-2px);
        }

        .photo-preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 25px;
        }

        .photo-preview {
            position: relative;
            aspect-ratio: 1;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .photo-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo-remove {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(0,0,0,0.7);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            cursor: pointer;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Condition Selector */
        .condition-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .condition-option {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: #fff;
        }

        .condition-option:hover {
            border-color: #000;
        }

        .condition-option.selected {
            border-color: #000;
            background: #f8f8f8;
        }

        .condition-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #000;
        }

        .condition-description {
            font-size: 14px;
            color: #666;
        }

        /* Submit Button */
        .submit-section {
            text-align: center;
            padding: 40px 0;
            border-top: 1px solid #e5e5e5;
            margin-top: 40px;
        }

        .submit-button {
            background: #000;
            color: #fff;
            padding: 18px 50px;
            border-radius: 6px;
            border: none;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .submit-button:hover {
            background: #333;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .submit-button:disabled {
            background: #ccc;
            transform: none;
            box-shadow: none;
            cursor: not-allowed;
        }

            .listing-hero h1 {
                font-size: 28px;
            }

            .listing-hero p {
                font-size: 16px;
            }

            .listing-form {
                padding: 40px 30px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .form-section-title {
                font-size: 20px;
            }

            .condition-grid {
                grid-template-columns: 1fr;
            }

            .photo-upload-area {
                padding: 40px 20px;
            }
        

        /* Hidden file input */
        .hidden-file-input {
            display: none;
        }

        /* Loading states */
        .loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .spinner {
            border: 2px solid #f3f3f3;
            border-top: 2px solid #000;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            display: inline-block;
            margin-right: 10px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Header - Exact same as sell page -->
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

    <!-- Main Navigation - Exact same as sell page -->
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

    <!-- Listing Hero Section -->
    <section class="listing-hero">
        <div class="listing-hero-content">
            <h1>List Your Fashion Item</h1>
            <p>Add your authentic fashion pieces to our marketplace and reach buyers worldwide.</p>
        </div>
    </section>

    <!-- Listing Form Section -->
    <section class="listing-form-section">
        <div class="section-content">
            <form class="listing-form" id="listingForm">
                <!-- Photos Section -->
                <div class="form-section">
                    <h2 class="form-section-title">
                        <span class="section-icon">📸</span>
                        Photos
                    </h2>
                    <div class="photo-upload-area" id="photoUploadArea">
                        <div class="upload-icon">📷</div>
                        <div class="upload-text">Upload Photos</div>
                        <div class="upload-subtext">Drag and drop your photos here, or click to browse</div>
                        <button type="button" class="upload-button" onclick="document.getElementById('photoInput').click()">
                            Choose Photos
                        </button>
                        <input type="file" id="photoInput" class="hidden-file-input" multiple accept="image/*">
                    </div>
                    <div class="photo-preview-grid" id="photoPreviewGrid"></div>
                </div>

                <!-- Item Details Section -->
                <div class="form-section">
                    <h2 class="form-section-title">
                        <span class="section-icon">👕</span>
                        Item Details
                    </h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Brand</label>
                            <input type="text" class="form-input" placeholder="e.g., Gucci, Nike, Supreme" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <select class="form-select" required>
                                <option value="">Select Category</option>
                                <option value="clothing">Clothing</option>
                                <option value="shoes">Shoes</option>
                                <option value="accessories">Accessories</option>
                                <option value="bags">Bags</option>
                                <option value="jewelry">Jewelry</option>
                                <option value="watches">Watches</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Size</label>
                            <input type="text" class="form-input" placeholder="e.g., M, 32, 10.5" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Color</label>
                            <input type="text" class="form-input" placeholder="e.g., Black, Navy Blue" required>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-input" placeholder="Descriptive title for your item" required>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">Description</label>
                            <textarea class="form-textarea" placeholder="Detailed description including fit, materials, condition notes, etc." required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Condition Section -->
                <div class="form-section">
                    <h2 class="form-section-title">
                        <span class="section-icon">⭐</span>
                        Condition
                    </h2>
                    <div class="condition-grid">
                        <div class="condition-option" data-condition="new">
                            <div class="condition-title">New with Tags</div>
                            <div class="condition-description">Brand new, never worn with original tags</div>
                        </div>
                        <div class="condition-option" data-condition="new-no-tags">
                            <div class="condition-title">New without Tags</div>
                            <div class="condition-description">Brand new, never worn without tags</div>
                        </div>
                        <div class="condition-option" data-condition="excellent">
                            <div class="condition-title">Excellent</div>
                            <div class="condition-description">Worn once or twice, no visible wear</div>
                        </div>
                        <div class="condition-option" data-condition="very-good">
                            <div class="condition-title">Very Good</div>
                            <div class="condition-description">Gently used with minimal signs of wear</div>
                        </div>
                        <div class="condition-option" data-condition="good">
                            <div class="condition-title">Good</div>
                            <div class="condition-description">Used with some signs of wear</div>
                        </div>
                        <div class="condition-option" data-condition="fair">
                            <div class="condition-title">Fair</div>
                            <div class="condition-description">Well-worn with obvious signs of use</div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Section -->
                <div class="form-section">
                    <h2 class="form-section-title">
                        <span class="section-icon">💰</span>
                        Pricing
                    </h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Asking Price</label>
                            <div class="price-input-group">
                                <input type="number" class="form-input price-input" placeholder="0.00" step="0.01" min="1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Original Retail Price (Optional)</label>
                            <div class="price-input-group">
                                <input type="number" class="form-input price-input" placeholder="0.00" step="0.01" min="1">
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">Additional Notes (Optional)</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any additional information about pricing, shipping, or the item"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Submit Section -->
                <div class="submit-section">
                    <button type="submit" class="submit-button" id="submitButton">
                        List Item for Sale
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer - Exact same as sell page -->
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
        let selectedPhotos = [];
        let selectedCondition = null;

        document.addEventListener('DOMContentLoaded', function() {
            // Photo upload functionality
            const photoInput = document.getElementById('photoInput');
            const photoUploadArea = document.getElementById('photoUploadArea');
            const photoPreviewGrid = document.getElementById('photoPreviewGrid');

            // File input change
            photoInput.addEventListener('change', handleFileSelect);

            // Drag and drop functionality
            photoUploadArea.addEventListener('dragover', handleDragOver);
            photoUploadArea.addEventListener('drop', handleDrop);
            photoUploadArea.addEventListener('dragenter', handleDragEnter);
            photoUploadArea.addEventListener('dragleave', handleDragLeave);

            // Condition selection
            const conditionOptions = document.querySelectorAll('.condition-option');
            conditionOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Remove selected class from all options
                    conditionOptions.forEach(opt => opt.classList.remove('selected'));
                    // Add selected class to clicked option
                    this.classList.add('selected');
                    selectedCondition = this.dataset.condition;
                });
            });

            // Form submission
            document.getElementById('listingForm').addEventListener('submit', handleFormSubmit);

            // Search input focus effect
            const searchInput = document.querySelector('.search-input');
            if (searchInput) {
                searchInput.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.02)';
                });
                
                searchInput.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            }
        });

        function handleFileSelect(e) {
            const files = Array.from(e.target.files);
            processFiles(files);
        }

        function handleDragOver(e) {
            e.preventDefault();
        }

        function handleDragEnter(e) {
            e.preventDefault();
            e.currentTarget.classList.add('dragover');
        }

        function handleDragLeave(e) {
            e.preventDefault();
            e.currentTarget.classList.remove('dragover');
        }

        function handleDrop(e) {
            e.preventDefault();
            e.currentTarget.classList.remove('dragover');
            const files = Array.from(e.dataTransfer.files);
            processFiles(files);
        }

        function processFiles(files) {
            const imageFiles = files.filter(file => file.type.startsWith('image/'));
            
            imageFiles.forEach(file => {
                if (selectedPhotos.length < 10) { // Limit to 10 photos
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const photoData = {
                            file: file,
                            url: e.target.result,
                            id: Date.now() + Math.random()
                        };
                        selectedPhotos.push(photoData);
                        displayPhotoPreview(photoData);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function displayPhotoPreview(photoData) {
            const photoPreviewGrid = document.getElementById('photoPreviewGrid');
            
            const photoPreview = document.createElement('div');
            photoPreview.className = 'photo-preview';
            photoPreview.innerHTML = `
                <img src="${photoData.url}" alt="Preview">
                <button type="button" class="photo-remove" onclick="removePhoto('${photoData.id}')">×</button>
            `;
            
            photoPreviewGrid.appendChild(photoPreview);
        }

        function removePhoto(photoId) {
            selectedPhotos = selectedPhotos.filter(photo => photo.id != photoId);
            
            // Remove preview element
            const photoPreviewGrid = document.getElementById('photoPreviewGrid');
            const photoElements = photoPreviewGrid.children;
            for (let i = 0; i < photoElements.length; i++) {
                const removeButton = photoElements[i].querySelector('.photo-remove');
                if (removeButton && removeButton.getAttribute('onclick').includes(photoId)) {
                    photoElements[i].remove();
                    break;
                }
            }
        }

        function handleFormSubmit(e) {
            e.preventDefault();
            
            // Validate required fields
            if (selectedPhotos.length === 0) {
                alert('Please upload at least one photo of your item.');
                return;
            }
            
            if (!selectedCondition) {
                alert('Please select the condition of your item.');
                return;
            }

            // Show loading state
            const submitButton = document.getElementById('submitButton');
            const originalText = submitButton.textContent;
            submitButton.innerHTML = '<span class="spinner"></span>Processing...';
            submitButton.disabled = true;

            // Simulate form processing
            setTimeout(() => {
                alert('Success! Your item has been listed for sale. You will receive a confirmation email shortly.');
                
                // Reset form
                document.getElementById('listingForm').reset();
                selectedPhotos = [];
                selectedCondition = null;
                document.getElementById('photoPreviewGrid').innerHTML = '';
                document.querySelectorAll('.condition-option').forEach(opt => opt.classList.remove('selected'));
                
                // Reset button
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            }, 2000);
        }

        // Form validation helpers
        function validateForm() {
            const requiredFields = document.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#ff4444';
                    isValid = false;
                } else {
                    field.style.borderColor = '#ddd';
                }
            });
            
            return isValid && selectedPhotos.length > 0 && selectedCondition;
        }

        // Real-time form validation
        document.addEventListener('input', function(e) {
            if (e.target.matches('.form-input, .form-select, .form-textarea')) {
                if (e.target.value.trim()) {
                    e.target.style.borderColor = '#ddd';
                }
            }
        });

        // Auto-resize textarea
        document.addEventListener('input', function(e) {
            if (e.target.matches('.form-textarea')) {
                e.target.style.height = 'auto';
                e.target.style.height = e.target.scrollHeight + 'px';
            }
        });

        // Price formatting
        document.addEventListener('input', function(e) {
            if (e.target.matches('.price-input')) {
                let value = e.target.value;
                if (value && !isNaN(value)) {
                    // Ensure two decimal places on blur
                    e.target.addEventListener('blur', function() {
                        if (this.value) {
                            this.value = parseFloat(this.value).toFixed(2);
                        }
                    });
                }
            }
        });

        // Enhanced upload area interactions
        document.getElementById('photoUploadArea').addEventListener('click', function(e) {
            if (e.target === this || e.target.classList.contains('upload-icon') || 
                e.target.classList.contains('upload-text') || e.target.classList.contains('upload-subtext')) {
                document.getElementById('photoInput').click();
            }
        });

        // Animate form sections on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe form sections for animation
        document.addEventListener('DOMContentLoaded', function() {
            const formSections = document.querySelectorAll('.form-section');
            formSections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(30px)';
                section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(section);
            });
        });
    </script>
</body>
</html>