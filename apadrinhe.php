<?php

include 'back/conexao.php';
$sql = "SELECT id_animal, nome, especie, porte 
        FROM animais 
        WHERE status = 'disponivel'";

$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js" defer></script>
    <title>Patinhas da Luz</title>
</head>
<body>
    <header>
       <a href="index.html">
         <img src="img/patinhas_da_luz.png" alt="logo" id="logo">
      </a>
    <nav class="menu-principal">
       <ul>
        <li><a href="bazar.html">Bazar</a></li>
        <li><a href="apadrinhe.php">Apadrinhe</a></li>
        <li><a href="sobre.html">Sobre nós</a></li>
        <li><a href="ajude.html">Ajude</a></li>
       </ul>
    </nav>
    </header>
    <div class="banner-principal">
      <img src="img/Banner Adoção 2.0.png">
    </div>
    <h2 class="headeradote">Adote</h2>
<section class="cachorroadocao">
    <div class="cartaodoacao">
        <img class="imgadocao" src="img/LUA.png" alt="Cachorro para Adoção">
        <h2 class="texto_animais">Lua</h2>
        <p class="textoadocao">
            Diga "Olá" para Lua, a cachorra que irradia felicidade! Seu sorriso contagiante e seu olhar doce mostram que ela está sempre pronta para a próxima aventura, seja um passeio no parque ou uma sessão de carinho no sofá. Lua é leal e carinhosa, e espera ansiosamente por alguém para chamar de sua família.
        </p>
        <p class="Destaque">Pronto(a) para a alegria que a Lua pode trazer?</p>
        <a href="#formulario-doacao" class="botao2">ADOTAR</a>
    </div>
    

    <div class="cartaodoacao">
        <img class="imgadocao" src="img/SOFY 2.0.png" alt="Animal para Adoção">
        <h2 class="texto_animais">Sofy</h2>
        <p class="textoadocao">
            Esta é Sofy, uma gatinha tigrada com uma expressão curiosa e cheia de vida. <br> Sofy é a companheira ideal para quem adora um pet brincalhão e que está sempre atento a tudo. <br> Ela está pronta para trazer seu charme e suas patinhas ágeis para alegrar o seu dia a dia.
        </p>
        <p class="Destaque">Sofy pode ser a nova estrela da sua casa!</p>
        <a href="#formulario-doacao" class="botao2">ADOTAR</a>
    </div>
    <div class="cartaodoacao">
        <img class="imgadocao" src="img/MORANGUINHO.png" alt="Animal para Adoção">
        <h2 class="texto_animais">Moranguinho</h2>
        <p class="textoadocao">
            Conheça Moranguinho, uma gatinha de tirar o fôlego! Com seu pelo branco marcante e hipnotizantes olhos azuis, ela é tão doce quanto seu nome sugere. <br> Moranguinho busca um lar tranquilo onde possa oferecer muito carinho e receber atenção. Ela é a prova de que a beleza vem acompanhada de uma personalidade adorável.
        </p>
        <p class="Destaque">Quer conhecer mais sobre essa gata especial?</p>
        <a href="#formulario-doacao" class="botao2">ADOTAR</a>
    </div>
</section>
    
    <h2 class="headeradote">Apadrinhe</h2>
    <div class="banner-principal">
      <img src="img/Banner Apadrinhamento (2).png">
      </div>
<section class="apadrinhe-secao-geral">
    
    <div class="content-block-adote">
        <div class="text-content-adote">
            <h2>Sofia</h2> 
            <p><b>Sofia</b> é a <b>curiosidade em forma de gata!</b> Ela adora observar o mundo ao redor de sua janela, é uma gatinha esperta e se apega profundamente aos humanos que a tratam com carinho. Sua inteligência e seu olhar atento são contagiantes!</p>
            <p><b>Apadrinhe a Sofia</b> e ajude a financiar seus <b>medicamentos e suplementos para controle do estresse</b> e a compra de novas redes de proteção para que ela possa continuar observando o mundo com segurança e tranquilidade, enquanto espera por um lar definitivo!</p>
            <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
        </div>
        <div class="card-polaroid">
            <img src="img/SOFIA.png" alt="Gata Sofia"> 
            <div class="card-caption">
                <span class="pet-icon">🐾</span>
                <span class="pet-name">Sofia</span>
            </div>
        </div>
    </div>
    
    <div id="hidden-pets" class="hidden-content">

        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Snoopy</h2> 
                <p><b>Snoopy</b> é a <b>alegria em forma de cão!</b> Ele tem uma energia contagiante e um coração gigante, sempre pronto para brincar e distribuir lambeijos.</p>
                <p>Por ter sido <b>resgatado de maus-tratos, ele ainda tem algumas sequelas físicas.</b> Apadrinhe o <b>Snoopy</b> e ajude a financiar suas sessões de fisioterapia e reabilitação, essenciais para que ele volte a correr livremente e sem dor! Sua ajuda garante a ele a chance de uma recuperação completa e uma vida plena ao lado de sua futura família.</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/SNOOPY.png" alt="Cachorro Snoopy"> 
                <div class="card-caption">
                    <span class="pet-icon">🦴</span>
                    <span class="pet-name">Snoopy</span>
                </div>
            </div>
        </div>
        
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Tigrinha</h2> 
                <p><b>Tigrinha</b> é a <b>coragem em forma de gata!</b> Com sua pelagem listrada marcante, ela tem uma personalidade destemida e, ao mesmo tempo, é incrivelmente carinhosa e apegada aos seus cuidadores. Por ter uma saúde robusta, ela precisa de suporte para manter essa vitalidade.</p>
                <p><b>Apadrinhe a Tigrinha</b> e ajude a financiar seus vermífugos e a compra de pentes e escovas especiais para manter suas listras sempre brilhantes e sua pele saudável. Seu apadrinhamento garante a proteção e o conforto que essa gatinha guerreira merece enquanto ela espera por um lar!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>

            <div class="card-polaroid">
                <img src="img/TIGRINHA.png" alt="Gata Tigrinha"> 
                <div class="card-caption">
                    <span class="pet-icon">🐾</span>
                    <span class="pet-name">Tigrinha</span>
                </div>
            </div>
        </div> 

        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Ozzy</h2> 
                <p><b>Ozzy</b> é a <b>curiosidade em forma de gato!</b> Ele tem uma energia incrível, ama explorar cada canto e está sempre pronto para uma nova travessura. Por ser tão aventureiro, ele precisa de cuidados especiais para garantir sua segurança e nutrição de atleta.</p>
                <p><b>Apadrinhe</b> o <b>Ozzy</b> e ajude a financiar as vacinas de reforço anuais e os testes de FIV/FeLV de rotina, que são essenciais para manter um gato explorador protegido e saudável. Sua ajuda garante que o Ozzy possa viver suas aventuras com segurança enquanto espera por um lar cheio de emoção!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/OZZY.png" alt="Gato Ozzy"> 
                <div class="card-caption">
                    <span class="pet-icon">🐾</span> 
                    <span class="pet-name">Ozzy</span>
                </div>
            </div>
        </div>
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Paçoca</h2> 
                <p><b>Paçoca é a simpatia em forma de cachorra!</b> Com seu jeitinho meigo e carinhoso, ela conquista a todos com sua doçura e uma resiliência incrível. Paçoca é um amor que merece todo o apoio para florescer plenamente.</p>
                <p>Apadrinhe a Paçoca e ajude a financiar seus check-ups veterinários regulares e a compra de brinquedos de roer resistentes, que ajudam a aliviar a ansiedade e mantêm sua saúde dental em dia. Sua ajuda garante que a Paçoca continue feliz e saudável enquanto espera por sua família eterna!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/PAÇOCA.png" alt="Cachorro Paçoca"> 
                <div class="card-caption">
                    <span class="pet-icon">🦴</span> 
                    <span class="pet-name">Paçoca</span>
                </div>
            </div>
        </div>
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Lulu</h2> 
                <p><b>Lulu é a vivacidade em forma de gata!</b> Ela é curiosa, ama interagir e tem uma personalidade forte e carinhosa. Por ser muito sociável, ela precisa de estímulo constante e cuidados com sua nutrição e pelo.</p>
                <p><b>Apadrinhe a Lulu</b> e ajude a financiar sua escovação profissional de rotina e os suplementos vitamínicos que mantêm sua pelagem tigrada sempre brilhante e saudável. Sua contribuição garante que a Lulu continue radiante e pronta para conquistar seu lar eterno!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/LULU.png" alt="Cachorro Lulu"> 
                <div class="card-caption">
                    <span class="pet-icon">🐾</span> 
                    <span class="pet-name">Lulu</span>
                </div>
            </div>
        </div>
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Zen</h2> 
                <p><b>Zen é a tranquilidade em forma de cachorro!</b> Com um olhar sereno e uma postura equilibrada, ele tem um coração gigante, mas precisa de um ambiente controlado para manter sua paz interior. Ele é um sobrevivente que aprendeu a calma em meio ao caos.</p>
                <p><b>Apadrinhe o Zen</b> e ajude a financiar seu treinamento positivo contínuo e as camas ortopédicas/calmantes que ele precisa para garantir um descanso reparador. Sua ajuda é fundamental para manter a estabilidade e o bem-estar deste cão maravilhoso enquanto ele espera por um lar definitivo!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/ZEN.png" alt="Cachorro ZEN"> 
                <div class="card-caption">
                    <span class="pet-icon">🦴</span> 
                    <span class="pet-name">Zen</span>
                </div>
            </div>
        </div>
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Cissa</h2> 
                <p><b>Cissa é a doçura em forma de mistério!</b> Ela é reservada, curiosa e tem um carinho imenso para oferecer, mas por vezes se assusta facilmente com o novo.</p>
                <p>Ela está no processo de adaptação para confiar novamente nas pessoas após um passado difícil. <b>Apadrinhe a Cissa</b> e ajude a financiar seu acompanhamento comportamental e a compra de suplementos naturais que a ajudam a se sentir mais segura e tranquila, para que ela possa se abrir e encontrar a paz no seu futuro lar!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/CISSA.png" alt="Gata Cissa"> 
                <div class="card-caption">
                    <span class="pet-icon">🐾</span> 
                    <span class="pet-name">Cissa</span>
                </div>
            </div>
        </div>
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Cherry</h2> 
                <p><b>Cherry é a alegria em forma de gata!</b> Ela tem uma curiosidade contagiante e um coração enorme, sempre pronta para brincar e explorar o ambiente.</p>
                <p>Por ser uma gata muito ativa e esperta, ela adora atividades que estimulem sua mente e corpo. Apadrinhe a Cherry e ajude a financiar seus brinquedos interativos e o enriquecimento ambiental do seu espaço, garantindo que ela gaste toda a sua energia de forma saudável e esteja feliz enquanto espera por um lar definitivo!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/CHERRY.png" alt="Gata Cherry"> 
                <div class="card-caption">
                    <span class="pet-icon">🐾</span> 
                    <span class="pet-name">Cherry</span>
                </div>
            </div>
        </div>
        <div class="content-block-adote">
            <div class="text-content-adote">
                <h2>Clarinha</h2> 
                <p>A Gatinha Clarinha é a doçura em forma de gata! Com seus inconfundíveis olhos azuis e pelagem clarinha, ela é pura elegância e carinho. Apesar de ser tranquila, sua saúde exige atenção especial para que ela se mantenha sempre radiante.</p>
                <p><b>Apadrinhe a Gatinha Clarinha</b> e ajude a financiar sua alimentação de alta qualidade (Super Premium) e os exames de rotina que garantem que ela esteja sempre saudável e forte, pronta para receber sua nova família!</p>
                <a href="https://wa.me/11987493549?text=Oii,%20gostaria%20de%20apadrinhar" class="button apadrinhe-button">APADRINHE</a>
            </div>
            <div class="card-polaroid">
                <img src="img/CLARINHA.png" alt="Gata Clarinha"> 
                <div class="card-caption">
                    <span class="pet-icon">🐾</span> 
                    <span class="pet-name">Clarinha</span>
                </div>
            </div>
        </div>
    </div> 
    <div class="read-more-container">
        <button id="read-more-btn" class="apadrinhe-button">VER MAIS BICHINHOS</button>
    </div>
</section>

    <section id="formulario-doacao" class="formulario-container">

    <div class="form-header-box">
        <h2 class="form-title">Interesse em Adoção</h2>
        <p class="form-subtitle">
            Preencha o formulário abaixo para demonstrar seu interesse
            em adotar um de nossos animais.
        </p>
    </div>

    <form class="adocao-form" action="back/processar_interesse.php" method="POST">

        <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone"
                       placeholder="(11) 99999-9999">
            </div>

        <div class="form-group">
          <label for="id_animal">Animal de interesse</label>
          <select name="id_animal" id="id_animal" required>
          <option value="">Selecione um animal</option>

        <?php while ($animal = $result->fetch_assoc()) { ?>
            <option value="<?= $animal['id_animal'] ?>">
                <?= $animal['nome'] ?> —
                <?= ucfirst($animal['especie']) ?> |
                Porte: <?= ucfirst($animal['porte']) ?>
            </option>
        <?php } ?>

        </select>

        </div>
        </div>

        <div class="form-group">
          <label for="mensagem">Mensagem</label>
          <textarea id="mensagem" name="mensagem" rows="4"></textarea>
        </div>


        <button type="submit" class="botao2 form-submit-btn">
            Enviar interesse
        </button>

    </form>
</section>
 <footer class="footer">
        <div class="footer-container">

            <div class="footer-logo-contato">
                <div class="footer-logo"><img src="img/patinhas_da_luz.png" alt="logo" id="logo"></div>
                <div class="footer-contato">
                    <ul id="links">
                        <li><i class="fab fa-facebook-f"><a href="https://m.facebook.com/lekaagomes/"></i> projetopatinhasdaluz</li></a>
                        <li><i class="fab fa-instagram"><a href="https://www.instagram.com/projetopatinhasdaluz/"></i> projetopatinhasdaluz</li></a>
                        <li><i class="fas fa-phone"><a href="https://wa.me/5511987493549"></i> 11 98749-3549</li></a>
                    </ul>
                </div>
            </div>

            <div class="footer-menu">
                <h1>Menu</h1>
                 <ul id="links">
                    <li><a href="bazar.html">Bazar</a></li>
                    <li><a href="apadrinhe.html">Apadrinhe</a></li>
                    <li><a href="sobre.html">Sobre nós</a></li>
                    <li><a href="ajude.html">Ajude</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-copyright">
            <p>&copy; 2025 Patinhas da Luz — Todos os direitos reservados</p>
        </div>
    </footer>
