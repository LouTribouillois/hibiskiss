  // Gestion de la quantité


        const addToCartBtn = document.querySelector('.add-to-cart');

        
        // Ajout au panier
        addToCartBtn.addEventListener('click', () => {
            // Animation du bouton
            addToCartBtn.innerHTML = '<i class="fas fa-check"></i> Ajouté !';
            addToCartBtn.style.backgroundColor = '#4CAF50';
            
            // Réinitialisation après 2 secondes
            setTimeout(() => {
                addToCartBtn.innerHTML = '<i class="fas fa-cart-plus"></i> Ajouter au panier';
                addToCartBtn.style.backgroundColor = '';
            }, 2000);
            
        });
        
        // Effet parallaxe sur l'image de la bière
        window.addEventListener('scroll', function() {
            const beerImage = document.querySelector('.beer-image');
            const scrollPosition = window.pageYOffset;
            beerImage.style.transform = `translateY(${scrollPosition * 0.3}px) rotate(2deg)`;
        });