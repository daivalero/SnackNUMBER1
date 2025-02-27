<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/responsive.css" media="screen">
    <link rel="stylesheet" href="https://use.typekit.net/gvp4xoa.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../js/menu.js" defer></script>
    <script src="../js/btn-menu-mob.js" defer></script>
    <script src="../js/rolagem.js"></script>
    <script src="../js/modal.js" defer></script>
    <script src="../js/icones.js" defer></script>
    <title>Snack Fast</title>
</head>
<body>

    <header id="header">

        <div class="interface">
    
            <section class="logo">
                <img src="../images/logo_snack_fast.png" alt="Logotipo do site">
            </section>
    
            <section class="menu-desktop">
                <nav>
                    <ul>
                        <li><a href="#inicio">INÍCIO</a></li>
                        <li><a href="#cardapio">CARDÁPIO</a></li>
                        <li><a href="sobre.html" target="_blank">SOBRE</a></li>
                    </ul>
                </nav>
            </section>

            <!-- JANELA MODAL DE LOGIN E CARRINHO -->

            <section class="btn-icones">
                <a href="Carrinhoo.php">
                    <i class="fa fa-shopping-cart"></i>
                </a>   

                <a href="Login.php">
                    <i class="fa fa-user login-icon" id="login-icon"></i>
                </a>
            </section>
            <!-- Modal Carrinho de Compras -->



    
            <section class="btn-contato">
                <a href="#contato">
                    <button>CONTATO</button>
                </a>
            </section>
    
            <div class="btn-menu-mob" id="btn-menu-mob">
                <div class="line-menumob-1"></div>
                <div class="line-menumob-2"></div>
            </div>
    
            <section class="menu-mobile" id="menu-mobile">
                <nav>
                    <ul>
                        <li><a href="#inicio">INÍCIO</a></li>
                        <li><a href="#cardapio">CARDÁPIO</a></li>
                        <li><a href="#foodtruck">SOBRE</a></li>
                        <li><a href="#contato">CONTATO</a></li>
                    </ul>
                </nav>
            </section>
    
        </div>
    
    </header>
    

    <section class="hero-site" id="inicio">
        

        <div class="interface">

            <div class="txt-hero">

                <h1>A rua é nossa cozinha, <span>o sabor é seu!</span></h1>
                <p>Bem-vindo(a) ao Snack Fast. O melhor do lanche sobre rodas de São Bernardo do Campo! Agende a retirada do seu pedido com facilidade.
                    <span class="aviso">Não realizamos entregas!</span></p>
                <a href="Login.php">
                    <button>PEDIR AGORA</button>
                </a>
                
            </div>

        </div>

    </section>


    

    <section class="cardapio" id="cardapio">
        <div class="interface">

            <h2 class="categoria-titulo">Hot-Dogs</h2>

            <article class="itens-container">
                <div class="img-itens">
                    <img src="../images/american_dog.png" alt="Cachorro-Quente">
                </div>
                <div class="txt-itens item-1">
                    <h3><span>American</span><br> Dog</h3>
                    <p>Pão, Salsicha, Purê de Batata, Ketchup, Maionese e Batata Palha.</p>
                    <p class="preco">R$ 12,00</p>
                    <span class="adicional">+cheddar por R$ 1,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>
            </article>

            <article class="itens-container">

                <div class="txt-itens item-2">
                    <h3><span>Sampa</span><br> Dog</h3>
                    <p>Pão, Salsicha, Purê de Batata, Vinagrete, Milho, Cheddar, Catupiry, Ketchup, Maionese e Batata Palha.</p>
                    <p class="preco">R$ 13,00</p>
                    <span class="adicional">+ queijo e bacon por R$ 6,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/sampa_dog.png" alt="Cachorro-Quente">
                </div>

            </article>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/dog_especial.png" alt="Cachorro-Quente">
                </div>

                <div class="txt-itens item-4">
                    <h3>Dog<br> <span>Especial</span></h3>
                    <p>Baguete com Parmesão, 2 Salsichas, Purê de Batata, Vinagrete, Milho, Cheddar, Catupiry, Ketchup, Maionese e Batata Palha.</p>
                    <p class="preco">R$ 15,00</p>
                    <span class="adicional">+ queijo e bacon por R$ 6,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens item-2">
                    <h3>Dog<br> <span>Supremo</span></h3>
                    <p>Baguete com Parmesão, 2 Salsichas, Purê de Batata, Vinagrete, Milho, Cheddar, Catupiry, Ketchup, Maionese e Batata Palha.</p>
                    <p class="preco">R$ 17,00</p>
                    <span class="adicional">+ queijo e bacon por R$ 6,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/dog_supremo.png" alt="Cachorro-Quente">
                </div>

            </article>

            <h2 class="categoria-titulo">Hambúrgueres</h2>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/cheese_burguer.png" alt="Hambúrguer">
                </div>

                <div class="txt-itens">
                    <h3><span>Cheese</span><br> Burguer</h3>
                    <p>Pão, Hambúrguer, Queijo, Cheddar e Maionese.</p>
                    <p class="preco">R$ 9,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens item-2">
                    <h3>Burguer<br> <span>Bacon</span></h3>
                    <p>Pão, Hambúrguer, Bacon, Queijo, Cheddar e Maionese.</p>
                    <p class="preco">R$ 13,00</p>
                    <span class="adicional">+ alface e tomate por R$ 3,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/burguer_bacon.png" alt="Hambúrguer">
                </div>

            </article>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/burguer_salada.png" alt="Hambúrguer">
                </div>

                <div class="txt-itens">
                    <h3>Burguer<br> <span>Salada</span></h3>
                    <p>Pão, Hambúrguer, Alface, Tomate, Cheddar e Maionese.</p>
                    <p class="preco">R$ 13,00</p>
                    <span class="adicional">+ bacon por R$ 3,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens item-2">
                    <h3><span>Big</span><br> Burguer <span>Bacon</span></h3>
                    <p>Pão, 2 Hambúrgueres, Bacon, Queijo, Cheddar e Maionese.</p>
                    <p class="preco">R$ 16,00</p>
                    <span class="adicional">+ alface e tomate por R$ 3,00</span><br>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/big_burguer_bacon.png" alt="Hambúrguer">
                </div>

            </article>

            <h2 class="categoria-titulo">Sanduíches</h2>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/mega_calabresa.png" alt="Sanduíche">
                </div>

                <div class="txt-itens">
                    <h3>Mega<br> <span>Calabresa</span></h3>
                    <p>Baguete com Parmesão, Calabresa, Mussarela, Cheddar, Vinagrete, Maionese, Ketchup, Cebola e Orégano.</p>
                    <p class="preco">R$ 19,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens item-2">
                    <h3>Mega<br> <span>Frango</span></h3>
                    <p>Baguete com Parmesão, Frango Temperado e Desfiado, Mussarela, Milho, Catupiry, Ketchup, Maionese e Orégano.</p>
                    <p class="preco">R$ 20,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/mega_frango.png" alt="Sanduíche">
                </div>

            </article>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/mega_calabresa.png" alt="Sanduíche">
                </div>

                <div class="txt-itens">
                    <h3>Mega<br> <span>Toscana</span></h3>
                    <p>Baguete com Parmesão, Linguiça Toscana, Mussarela, Vinagrete, Ketchup, Maionese e Orégano.</p>
                    <p class="preco">R$ 20,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens item-2">
                    <h3>Mega<br> <span>Pernil</span></h3>
                    <p>Baguete com Parmesão, Pernil, Mussarela, Orégano, Vinagrete, Ketchup, Maionese e Barbecue.</p>
                    <p class="preco">R$ 19,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/mega_pernil.png" alt="Sanduíche">
                </div>

            </article>

            <h2 class="categoria-titulo">Bebidas</h2>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/guarana_antartica.png" alt="Refrigerante">
                </div>

                <div class="txt-itens-bebidas">
                    <h3><span>Guaraná Antártica</span><br> (Lata)</h3>
                    <p>350ml.</p>
                    <p class="preco">R$ 6,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>


            </article>

            <article class="itens-container">

                <div class="txt-itens-bebidas item-2">
                    <h3><span>Coca-Cola</span><br> (lata)</h3>
                    <p>350ml.</p>
                    <p class="preco">R$ 6,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/coca_cola.png" alt="Refrigerante">
                </div>

            </article>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/agua.png" alt="Água">
                </div>

                <div class="txt-itens-bebidas">
                    <h3>Água<br> <span>Mineral</span></h3>
                    <p>500ml.</p>
                    <p class="preco">R$ 3,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens-bebidas item-2">
                    <h3><span>Café</span></h3>
                    <p>180ml.</p>
                    <p class="preco">R$ 3,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/cafe.png" alt="Café">
                </div>

            </article>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/cafe.png" alt="Café com Leite">
                </div>

                <div class="txt-itens-bebidas">
                    <h3>Café<br> <span>com Leite</span></h3>
                    <p>180ml.</p>
                    <p class="preco">R$ 3,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

            <article class="itens-container">

                <div class="txt-itens-bebidas item-2">
                    <h3>Suco Natural<br> <span>Goiaba</span></h3>
                    <p>300ml.</p>
                    <p class="preco">R$ 3,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

                <div class="img-itens">
                    <img src="../images/suco_goiaba.png" alt="Suco">
                </div>

            </article>

            <article class="itens-container">

                <div class="img-itens">
                    <img src="../images/suco_maracuja.png" alt="Suco">
                </div>

                <div class="txt-itens-bebidas">
                    <h3>Suco Natural<br> <span>Maracujá</span></h3>
                    <p>350ml.</p>
                    <p class="preco">R$ 3,00</p>
                    <a href="Login.php">
                        <button class="btn-pedir">Adiconar ao Carrinho</button>
                    </a>
                </div>

            </article>

        </div>
    </section>

    <section class="foodtruck" id="foodtruck">
        <div class="interface">

            <h3>Quem Somos <span>e o Que Nos Move</span></h3>
            <p>Conheça um pouco mais da nossa história.</p>
            <a href="sobre.html" target="_blank">
                <button>Conheça-nos</button>
            </a>


        </div>

        <div class="overlay"></div>


    </section>

    <section class="contato" id="contato">
        <div class="interface">

            <article class="txt-contato">
                <h3>Entre em
                    <span>contato</span></h3>
            </article>

            <article class="icons-contato">
                <a href="https://wa.me/11916506687">
                    <button><i class="bi bi-whatsapp"></i> <p>Chamar no WhatsApp</p></button>
                </a>
                <a href="#">
                    <button><i class="bi bi-envelope-at-fill"></i> <p>Enviar e-mail</p></button>
                </a>
                <a href="#">
                    <button><i class="bi bi-telephone-fill"></i> <p>Ligar</p></button>
                </a>
                <button id="openModal"><i class="bi bi-ui-checks"></i> <p>Formulário</p></button>
            </article>

            <div id="formModal" class="modal">
                <div class="modal-content">
                    <!-- Botão de Fechar -->
                    <span id="closeModal" class="close">&times;</span>
                    <h2>Formulário de Contato</h2>
                    <form>
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="message">Mensagem:</label>
                        <textarea id="message" name="message" required></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
    
    <main>
       <div id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.7869873693448!2d-46.55186908650582!3d-23.69118866164414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423586355a51%3A0xf1d7e7d2655053b1!2sAv.%20Senador%20Vergueiro%2C%20400%20-%20Rudge%20Ramos%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009750-000!5e0!3m2!1spt-BR!2sbr!4v1722358271290!5m2!1spt-BR!2sbr" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>

       <div class="info">
            <h1>ENCONTRE-NOS</h1>
            <p>Rua Atlântica, 730. Centro - São Bernado do Campo - SP</p>
            <p>Telefone: (11) 4336 - 7936 ou (11) 4336 - 7936</p>
            <p>snackfast@gmail.com.br</p>
       </div>

    </main>

   
     <footer>
        <div class="interface">
            <section class="top-footer">

                <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                <a href="#"><button><i class="bi bi-facebook"></i></button></a>
                <a href="#"><button><i class="bi bi-tiktok"></i></button></a>


            </section>

            <section class="middle-footer">
                <a href="#">Suporte</a>
                <a href="#">Informações</a>
                <a href="#">Marketing</a>
                <a href="#">Desenvolvedores</a>
            </section>

            <section class="bottom-footer">
                <p>Snack Fast 2024 &copy; Todos os direitos reservados.</p>
            </section>
        </div>
    </footer>


</body>
</html>