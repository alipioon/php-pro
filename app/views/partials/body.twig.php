<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="public/css/style01.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Integrador SE</span>
    </div>
    
    <ul class="nav-links">

      <?php $vl = ''; ?>

    <?php for ($k=0; $k < count($_POST) ; $k++){ ; ?> 
      
      <!-- <?php echo $_POST[$k][0]; ?>  -->

      <?php if ($vl != $_POST[$k][0]){ ?>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-collection'></i>
              <span class="link_name"><?php echo $_POST[$k][0]; $vl = $_POST[$k][0]; ?></span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
     
          <ul class="sub-menu">

            <?php for($f=0; $f < count($_POST); $f++) { ?>
                <?php $novo = $_POST[$f][0]; ?> 
                  
                  <?php if($novo == $vl){ ?>
                    <?php $id = $_POST[$f][3];?>
                      <!-- <li><a href="#" onclick=CargaForm(id) id= "<?php echo $id; ?>" > <?php echo $_POST[$f][2]; ?>  </a></li> -->
                      <li><a href=<?php echo $_POST[$f][2] . '/' .  $_POST[$f][3]; ?> id= "<?php echo $id; ?>" > <?php echo $_POST[$f][2]; ?>  </a></li>
                  
                  <?php } ?>

            <?php } ?>
          
          </ul>

  
      <?php } ?>
    
  
    <?php } ?>

    
    </li>

      <li>
        <div class="profile-details">

        <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">OM30</div>
        <div class="job">Tecnologia</div>
      </div>
      <!-- <i class="bx bx-log-out" aria-hidden="true" href="App/Views/Menu/sair.php"></i> -->
      <!-- <input type="button" value="SAIR" > -->
      <!-- <button type="button" href="App/Views/Menu/sair.php" onclick="Sair()">Sair</button> -->
      <i class="bx bx-log-out" aria-hidden="true" href="#" onclick="Sair()">Sair</i>
      
    </div>
  </li>

</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">INTEGRADOR</span>
    </div>
  </section>
  
  <div class="one"></div>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });

  function Sair(){
        // alert('evento sair funcionando');
        window.location.href = "sair.php";
        
      }

  function Alerta(){
    alert('evento vai carregar formulario -> ' );
    // window.location.href = "Novo.php";
  }



 function CargaForm(id){

  // <?php use app\Controller\Menu\Novo; ?>
// $xx = new Novo();

  alert(id);
  $x = new(Novo());

  // window.location.href = "//www.devmedia.com.br";
  // window.location.href = "//app/Controller/Menu/Novo.php";
  // console.log(window.location.href);
 
   
    // window.location.href = 'index.php';

  }

</script>
  </script>
</body>
</html>
