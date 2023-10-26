<header id="top">
    <div class="container-header">
        <div class="resources">
            <button id="zoomout" class="button-resources">A-</button>
            <button id="zoomin" class="button-resources">A+</button>

            <button class="button-resources" onclick="changeTheme('contraste')">
                <svg class="svg" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 17.1957C5 13.5778 8.33333 8.66476 15 2.45654C21.6667 8.66476 25 13.5778 25 17.1957C25 22.5201 20.6902 26.8554 15.3115 27.0171L15 27.0218C9.47715 27.0218 5 22.6225 5 17.1957ZM15 5.88708L14.7291 6.15599C9.87248 11.0025 7.5 14.7744 7.5 17.1957C7.5 21.2658 10.8579 24.5652 15 24.5652V5.88708Z" fill="white" />
                </svg>
                Alto contraste
            </button>
            <button class="button-resources reset">
                <svg class="svg" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5ZM15 5C9.47715 5 5 9.47715 5 15C5 20.5228 9.47715 25 15 25C20.5228 25 25 20.5228 25 15C25 9.47715 20.5228 5 15 5ZM9.11656 9.11656C9.56772 8.66541 10.2756 8.6307 10.7662 9.01245L10.8841 9.11656L15.0003 13.2328L19.1166 9.11656C19.6053 8.62781 20.3953 8.62781 20.8841 9.11656C21.3352 9.56772 21.3699 10.2756 20.9882 10.7662L20.8841 10.8841L16.7678 15.0003L20.8841 19.1166C21.3728 19.6053 21.3728 20.3953 20.8841 20.8841C20.6403 21.1278 20.3203 21.2503 20.0003 21.2503C19.7336 21.2503 19.467 21.1652 19.2444 20.9958L19.1166 20.8841L15.0003 16.7678L10.8841 20.8841C10.6403 21.1278 10.3203 21.2503 10.0003 21.2503C9.68031 21.2503 9.36031 21.1278 9.11656 20.8841C8.66541 20.4329 8.6307 19.7251 9.01245 19.2344L9.11656 19.1166L13.2328 15.0003L9.11656 10.8841C8.62781 10.3953 8.62781 9.60531 9.11656 9.11656Z" fill="white" />
                </svg>
                Resetar
            </button>

            <div class="button-theme">
                <!-- onclick="changeTheme('darkTheme')" -->
                <svg class="darkBtn" width="80" height="37" viewBox="0 0 80 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.4722 0.5H61.5278C71.4536 0.5 79.5 8.54644 79.5 18.4722C79.5 28.398 71.4536 36.4444 61.5278 36.4444H18.4722C8.54644 36.4444 0.5 28.398 0.5 18.4722C0.5 8.54644 8.54644 0.5 18.4722 0.5Z" fill="#3F3F44" stroke="#2C2C31" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0018 4.24843L23.8683 4.13058C23.3126 3.69846 22.509 3.73774 21.9983 4.24843L18.1607 8.0835H14.5L14.3348 8.09303C13.6303 8.17486 13.0834 8.77364 13.0834 9.50016V13.1608L9.24831 16.9984L9.13046 17.1319C8.69834 17.6876 8.73762 18.4912 9.24831 19.0019L13.0834 22.8381V26.5002L13.0929 26.6654C13.1747 27.3699 13.7735 27.9168 14.5 27.9168H18.1621L21.9983 31.7519L22.1318 31.8697C22.6875 32.3019 23.4911 32.2626 24.0018 31.7519L27.8365 27.9168H31.5L31.6653 27.9073C32.3698 27.8255 32.9167 27.2267 32.9167 26.5002V22.8367L36.7518 19.0019L36.8696 18.8684C37.3017 18.3127 37.2625 17.5091 36.7518 16.9984L32.9167 13.1622V9.50016L32.9072 9.33495C32.8253 8.63039 32.2266 8.0835 31.5 8.0835H27.838L24.0018 4.24843ZM30.0834 18.0002C30.0834 21.9122 26.9121 25.0835 23 25.0835V10.9168C26.9121 10.9168 30.0834 14.0881 30.0834 18.0002Z" fill="#E5E5E5" />
                </svg>
                <!-- onclick="changeTheme('whiteTheme')" -->
                <svg class="whiteBtn remove" width="80" height="37" viewBox="0 0 80 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 18.4722C0.5 8.54644 8.54644 0.5 18.4722 0.5H61.5278C71.4536 0.5 79.5 8.54644 79.5 18.4722C79.5 28.398 71.4536 36.4444 61.5278 36.4444H18.4722C8.54644 36.4444 0.5 28.398 0.5 18.4722Z" fill="#FAFAFC" stroke="#E6E6F0" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M58.0017 4.24831L57.8683 4.13046L57.7245 4.03225C57.1806 3.70816 56.4664 3.78018 55.9983 4.24831L52.1607 8.08337H48.5L48.3348 8.0929C47.6302 8.17474 47.0833 8.77352 47.0833 9.50004V13.1607L43.2483 16.9983L43.1304 17.1318C42.6983 17.6875 42.7376 18.4911 43.2483 19.0018L47.0833 22.838V26.5L47.0929 26.6653C47.1747 27.3698 47.7735 27.9167 48.5 27.9167H52.1621L55.9983 31.7518L56.1317 31.8696C56.6875 32.3017 57.491 32.2625 58.0017 31.7518L61.8365 27.9167H65.5L65.6652 27.9072C66.3698 27.8253 66.9167 27.2266 66.9167 26.5V22.8365L70.7517 19.0018L70.8696 18.8683C71.3017 18.3126 71.2624 17.509 70.7517 16.9983L66.9167 13.1621V9.50004L66.9071 9.33483C66.8253 8.63026 66.2265 8.08337 65.5 8.08337H61.8379L58.0017 4.24831ZM49.9167 18C49.9167 14.088 53.088 10.9167 57 10.9167C60.912 10.9167 64.0833 14.088 64.0833 18C64.0833 21.9121 60.912 25.0834 57 25.0834C53.088 25.0834 49.9167 21.9121 49.9167 18Z" fill="#3F3F44" />
                </svg>
            </div>
        </div>

        <nav class="navbar" id="navbar">
            <button class="menu-mobile svg btn-menu-mobile" aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <svg class="menu-mobile svg" width="51" height="51" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 17C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18C2 17.4477 2.44772 17 3 17H21ZM21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H21ZM21 5C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H21Z" fill="white" />
                </svg>
            </button>

            <ul>
                <li><a href="./vagas.php">Vagas</a></li>
                <li><a href="./curso.php">Cursos</a></li>
                <li><a href="./publicacoes-blog.php">Blog</a></li>
                <li><a href="./contato.php">Contato</a></li>
                <li><a href="./equipe.php">Equipe</a></li>
            </ul>

            <div class="button-user">
                <svg class="svg" width="51" height="52" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.875 34.6369H36.125C41.993 34.6369 46.75 39.3579 46.75 45.1814C46.75 46.3461 45.7986 47.2903 44.625 47.2903C43.5352 47.2903 42.637 46.4762 42.5143 45.4274L42.4892 44.8097C42.3025 41.6116 39.7221 39.0508 36.4996 38.8655L36.125 38.8547H14.875C11.3542 38.8547 8.5 41.6873 8.5 45.1814C8.5 46.3461 7.54861 47.2903 6.375 47.2903C5.20139 47.2903 4.25 46.3461 4.25 45.1814C4.25 39.5111 8.7599 34.8862 14.4141 34.6467L14.875 34.6369H36.125H14.875ZM25.5 5.1123C32.5416 5.1123 38.25 10.7774 38.25 17.7657C38.25 24.754 32.5416 30.4191 25.5 30.4191C18.4584 30.4191 12.75 24.754 12.75 17.7657C12.75 10.7774 18.4584 5.1123 25.5 5.1123ZM25.5 9.33011C20.8056 9.33011 17 13.1069 17 17.7657C17 22.4246 20.8056 26.2013 25.5 26.2013C30.1944 26.2013 34 22.4246 34 17.7657C34 13.1069 30.1944 9.33011 25.5 9.33011Z" fill="white" />
                </svg>
            </div>
        </nav>
    </div>

    <div class="perfil">
        <div class="header-perfil">
            <a href="./home.php">

            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.20835 30.0834C5.7921 30.0834 3.83335 28.1246 3.83335 25.7084V16.9584H2.37501C1.07578 16.9584 0.425118 15.3875 1.34382 14.4688L14.4688 1.34382C15.0383 0.774308 15.9617 0.774308 16.5312 1.34382L29.6562 14.4688C30.5749 15.3875 29.9243 16.9584 28.625 16.9584H27.1667V25.7084C27.1667 28.1246 25.2079 30.0834 22.7917 30.0834H8.20835ZM15.5 4.43742L5.80343 14.134C6.35641 14.3413 6.75001 14.8747 6.75001 15.5V25.7084C6.75001 26.5138 7.40293 27.1667 8.20835 27.1667L11.125 27.1652L11.125 21.3334C11.125 19.7225 12.4309 18.4167 14.0417 18.4167H16.9583C18.5692 18.4167 19.875 19.7225 19.875 21.3334L19.875 27.1652L22.7917 27.1667C23.5971 27.1667 24.25 26.5138 24.25 25.7084V15.5C24.25 14.8747 24.6436 14.3413 25.1966 14.134L15.5 4.43742ZM16.9583 21.3334H14.0417L14.0417 27.1652H16.9583L16.9583 21.3334Z" fill="black"/>
            </svg>




                <p> <?php
                  if(isset($_SESSION["id_empresa"])) {

                    $login_empresa = "SELECT nome_da_empresa FROM tb_empresa WHERE id =" . $_SESSION["id_empresa"];
                    $res = $conn->query($login_empresa);
                    $row = $res->fetch_object();

                    if(isset($_SESSION['id_empresa'])) {
                      echo $row->nome_da_empresa; 
                    } 
                    
                  }else if(isset($_SESSION['id_usuario'])) {
                    $login = "SELECT nome FROM tb_pessoa WHERE id =" . $_SESSION["id_usuario"];
                    $res = $conn->query($login);
                    $row = $res->fetch_object();

                    if(isset($_SESSION['id_usuario'])) {
                      echo $row->nome; 
                    } 
                  }
                  
                ?></p>
            </a>
        </div>

        <ul class="content-perfil">
        <?php
            if (isset($_SESSION['id_empresa'])) { ?>
                <li><a href="./perfil-empresa.php">Meu perfil</a></li>

            <?php
            }
            ?>

            <?php
            if (isset($_SESSION['id_usuario'])) { ?>
                <li><a href="./perfil.php">Meu perfil</a></li>
                <li><a href="./listar_favoritar_vaga.php">Vagas favoritas</a></li>
                <li><a href="./listar_favoritar_curso.php">Cursos favoritos</a></li>
             
            <?php
            }
            ?>

          <?php
            if (isset($_SESSION['adm'])) { ?>
                <!-- <li><a href="./perfil.php">Meu perfil</a></li>
                <li><a href="./listar_favoritar_vaga.php">Vagas favoritas</a></li>
                <li><a href="./listar_favoritar_curso.php">Cursos favoritos</a></li> -->
                <li><a href="./listar_usuarios.php">Lista de usuários - ADM</a></li>
                <li><a href="./listar_empresas.php">Lista de empresas - ADM</a></li>
                <li><a href="./listar_contatos.php">Lista de feedbacks - ADM</a></li>
            <?php
            }
            ?>
            <li class="sair">
                <a href="./sair.php">
                    Sair
                    <svg width="40" height="25" viewBox="0 0 100 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M77.31 23.6111L69.6045 30.2694L78.239 37.7778H33.5906V47.2222H78.239L69.6045 54.6833L77.31 61.3889L99.1697 42.5L77.31 23.6111ZM11.7309 9.44444H49.9854V0H11.7309C5.71946 0 0.801025 4.25 0.801025 9.44444V75.5555C0.801025 80.75 5.71946 85 11.7309 85H49.9854V75.5555H11.7309V9.44444Z" fill="black" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>

</header>