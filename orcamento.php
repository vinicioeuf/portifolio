<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8237094830527218"
     crossorigin="anonymous"></script>
 <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FYVCGF8EQT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FYVCGF8EQT');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pedir orçamento</title>  
    <meta name="author" content="@vinimvdz">
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.svg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> 
</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="">
			<img class="img-fluid" src="images/logo.svg" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="index.php">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre mim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfólio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tecnologias">Tecnologias</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#orcamento"> Pedir orçamento</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="orcamento" class="main-banner parallaxie" style="background: url('uploads/perfil 17.jpeg')">
		<div class="heading">
			<h1>Vamos ver detalhes do seu projeto!</h1>
			<button type="button" class="btn btn-success"><a class="nav-link js-scroll-trigger" href="#formulario">Montar orçamento!</a></button>
		</div>
	</section>

	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <section id="formulario">
        <div class="container">
            <div class="section-title text-left">
                <h3>Conte mais sobre sua ideia!</h3>
                <form action="validaForm.php" method="post">
                    <select class="form-select form-select-md mb-3" name="select" aria-label="Large select example">
                        <option selected disabled>Tipo de projeto</option>
                        <option value="1">Web: E-commerce</option>
                        <option value="2">Web: Blog</option>
                        <option value="3">Web: Controle de estoque</option>
                        <option value="4">Web: Outro</option>
                        <option value="5">Aplicativo: Android</option>
                        <option value="6">Aplicativo: IOS</option>
                        <option value="7">Aplicativo: Android e IOS</option>
                        <option value="8">Aplicativo: Outro</option>
                    </select>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                        <input type="text" class="form-control" name="nome" placeholder="do projeto" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Informe seu e-mail</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">seuemail@gmail.com</span>
                            <input type="text" class="form-control" id="basic-url" name="email" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <!-- <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div> -->
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Detalhe seu projeto</span>
                        <textarea class="form-control"  name="detalhes" aria-label="With textarea"></textarea>
                    </div>
                    <br>
                    <button type="submit" name="enviar" class="btn btn-success">Enviar</button>
                </form>

            </div>
        </div>
			
	</section>
    
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">Todos os direitos reservados a: &copy; 2022 <a href="https://www.instagram.com/vinimvdz/">Vinicio Eufrazio</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>
