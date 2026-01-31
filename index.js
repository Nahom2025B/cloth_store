document.querySelectorAll('.sellbutton').forEach(button => {
    button.addEventListener('click', function(e) {
      
         e.preventDefault();

       
        this.innerText = 'Sold';

        
        alert('Product marked as sold');

       
        // window.location.href = this.href;
    });
});
