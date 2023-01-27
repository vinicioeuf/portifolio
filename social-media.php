<link rel="stylesheet" href="social.css">
  <div class="main">
    <div class="navigation active">
      <span style="--i:0;--x:-1;--y:0;">
		<ion-icon name="logo-facebook"></ion-icon>
	  </span>
      <span style="--i:1;--x:1;--y:0;">
		<ion-icon name="logo-instagram"></ion-icon>
      </span>
      <span style="--i:2;--x:0;--y:-1;">
      	<ion-icon name="logo-linkedin"></ion-icon>
      </span>
      <span style="--i:3;--x:0;--y:1;">
      	<ion-icon name="logo-github"></ion-icon>
      </span>
    </div>
    <div class="close"><ion-icon name="close-outline"></ion-icon></div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let navigation = document.querySelector('.navigation');
    let close = document.querySelector('.close');
    navigation.onclick = function(){
      navigation.classList.add('active');
    }
    close.onclick = function(){
      navigation.classList.remove('active')
    }
</script>