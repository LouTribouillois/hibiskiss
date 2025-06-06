document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            // Trouve l'élément parent FAQ item et la réponse
            const faqItem = this.closest('.faq-item');
            const answer = this.nextElementSibling;
            
            // Ferme d'abord toutes les autres FAQs ouvertes
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.querySelector('.faq-question').classList.remove('active');
                    item.querySelector('.faq-answer').style.maxHeight = null;
                }
            });
            
            // Bascule l'état actif sur l'élément cliqué
            this.classList.toggle('active');
            
            // Anime l'ouverture/fermeture de la réponse
            if (this.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
                answer.style.maxHeight = null;
            }
        });
    });
});