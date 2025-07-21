<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer-title">
                <img src="imgs/Vector.svg">
                <h3>Johnson<span>bank</span></h3>
            </div>
            <div class="footer-links">
                <p>Acompanhe nas redes</p> 
                <a href="asd"><img style="width: 100%; max-width:22px; min-width: 22px" class="ytb-icon" src="imgs/footer-yt.svg"></a>
                <a href="https://www.linkedin.com/in/joaoferraresi/" target="_blank"><img style="width: 100%; max-width:15px; min-width: 15px" src="imgs/footer-lk.svg"></a>           
                <a href="#"><img style="width: 100%; max-width: 10px; min-width: 10px" src="imgs/footer-fb.svg"></a>            
                <a href="https://www.instagram.com/joaop.ferraresi/" target="_blank"><img style="width: 100%; max-width:16px; min-width:16px" src="imgs/footer-ig.svg"></a>              
                <a href="#"><img style="width: 100%; max-width:16px; min-width:16px" src="imgs/footer-x.svg"></a>          
            </div>
        </div>
        <div class="footer-main">
            
            <div class="footer-main-links">
                <div class="links">
                    <h1>Produtos Johnson</h1>
                    <a href="#">Cartão de crédito</a>
                    <a href="#">Cartão pré-pago</a>
                    <a href="#">Johnson Mais</a>
                    <a href="#">Investimentos</a>
                    <a href="#">Empréstimo</a>
                </div>
                <div class="links">
                    <h1>Conta digital PJ</h1>
                    <a href="#">Sou MEI</a>
                    <a href="#">Sou ME</a>
                </div>
                <div class="links">
                    <h1>Blog</h1>
                    <a href="#">#focanodinheiro</a>
                    <a href="#">O poder da comunidade</a>
                    <a href="#">Desafio das 52 semanas</a>
                    <a href="#">Planilha de gastos</a>
                </div>
                <div class="links">
                    <h1>Institucional</h1>
                    <a href="#">Conheça o Johnsonbank</a>
                    <a href="#">Trabalhe conosco</a>
                    <a href="#">Termos de uso</a>
                    <a href="#">Políticas de privacidade</a>  
                </div>
                <div class="links">
                    <h1>Ajuda</h1>
                    <a href="#">Ouvidoria</a>
                    <a href="#">Fale conosco</a>
                </div>
            </div>
            <div class="footer-main-infos">
                <div class="footer-atendimento">
                    <img src="imgs/atendimento-icon.svg">
                    <div class="footer-atendimento-text">
                        <h1>Atendimento:</h1>
                        <p>hey@johnsonbank.com.br (24 horas)</p>
                    </div>                 
                </div>
                <div class="footer-imprensa">
                    <img src="imgs/imprensa-icon.svg">
                    <div class="footer-imprensa-text">
                        <h1>Imprensa:</h1>
                        <p>imprensa@johnsonbank.com.br</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <img src="imgs/footer-emoji.png">
                <p>Oi! Leu até aqui? Você se preocupa com os mínimos detalhes, mesmo. A gente também. Por isso o time Johnsonbank está sempre trabalhando para fazer a conta digital perfeita para você ; )</p>    
            </div>
             
        </div>
    </div>
</footer>

<script>
    const movableImage = document.querySelector('.movable-image');

if (movableImage) { 
    movableImage.addEventListener('mousemove', (e) => {
        const imageWidth = movableImage.offsetWidth;
        const imageHeight = movableImage.offsetHeight;
        
        const mouseX = e.clientX - movableImage.getBoundingClientRect().left;
        const mouseY = e.clientY - movableImage.getBoundingClientRect().top;

        const moveX = (mouseX - imageWidth / 2) / (imageWidth / 2);
        const moveY = (mouseY - imageHeight / 2) / (imageHeight / 2);

        const translateX = moveX * 6; 
        const translateY = moveY * 6;

        movableImage.style.transform = `translate(${translateX}px, ${translateY}px)`;
    });

    
    movableImage.addEventListener('mouseleave', () => {
        movableImage.style.transform = 'translate(0, 0)';
    });
}
</script>

<script>
  function toggleMenu() {
    const menuLinks = document.querySelector('.menu-links');
    const menuBtn = document.querySelector('.menu-btn');
    
    menuLinks.classList.toggle('active');
    menuBtn.classList.toggle('active');
  }
</script>

<script>
  function toggleMenu(el) {
    document.querySelector('.menu-links').classList.toggle('active');
    document.querySelector('.menu-btn').classList.toggle('active');
    el.classList.toggle('active');
    document.body.classList.toggle('menu-open');
  }
</script>


<script>
  window.addEventListener('resize', function () {
    if (window.innerWidth > 1136) {
      document.body.classList.remove('menu-open');

      // Fecha também o menu visualmente (remove classe ativa do botão, etc.)
      const menuLinks = document.querySelector('.menu-links');
      const hamburger = document.querySelector('.hamburger');
      if (menuLinks) menuLinks.classList.remove('active');
      if (hamburger) hamburger.classList.remove('active');
    }
  });
</script>


<!-- <footer>
    <div class="container">
        <div class="footer-wraper" style="display: flex; justify-content: space-between; align-items: center; padding-top: 40px;">
            <div>
                <img src="imgs/Vector.svg">
                <h3>Johnson<span>bank</span></h3>
            </div>
            <div>
                <p>Acompanhe nas redes</p> 
                <img src="imgs/footer-yt.svg">  
                <img src="imgs/footer-lk.svg">              
                <img src="imgs/footer-fb.svg">              
                <img src="imgs/footer-ig.svg">              
                <img src="imgs/footer-x.svg">   
            </div>
        </div>
    </div>
</footer> -->