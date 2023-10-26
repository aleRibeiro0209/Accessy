-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2022 às 18:09
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_teste_de_cadastro_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(11) NOT NULL,
  `img_blog` varchar(225) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `primeiro_paragrafo` varchar(2000) NOT NULL,
  `segundo_paragrafo` varchar(2000) NOT NULL,
  `terceiro_paragrafo` varchar(2000) NOT NULL,
  `creacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `img_blog`, `titulo`, `subtitulo`, `autor`, `primeiro_paragrafo`, `segundo_paragrafo`, `terceiro_paragrafo`, `creacao`) VALUES
(1, '63839815991e4.png', 'Acessibilidade', '', 'Accessy', 'O que é Acessibilidade? \nÉ comum enfrentarmos diversas situações em que a acessibilidade se faz presente, porém com o estresse do dia a dia nem nos damos conta. Já reparou em um elevador, o que faz com que um paralelepípedo feito com chapas de aço seja acessível?\nAcessibilidade nada mais é que a qualidade de algo acessível, como acessar um lugar, serviço, produto ou informação de maneira segura e autônoma, sem qualquer tipo de obstáculo, favorecendo a todas as pessoas, tendo deficiências ou não, durante todas as etapas da vida.\n', 'Qual o objetivo da acessibilidade?\r\nA acessibilidade tem como principal objetivo conceder a todas as pessoas o benefício que é a mobilidade e a autonomia, proporcionando aquelas que tem suas capacidades reduzidas e/ou seu desempenho prejudicado, para que todos tenham a chance de desfrutar dos ambientes e das relações de um modo geral com mais segurança e tranquilidade.\r\n', 'Quais são os tipos de acessibilidade?\r\nCom base nos estudos do pesquisador Romeu Kasumi Sassaki, pode-se constatar seis tipos de acessibilidade:\r\n1.	Atitudinal;\r\nDiz respeito ao entendimento do outro sem preconceitos, estigmas, estereótipos e discriminações. Todos os outros tipos de acessibilidade têm relação com este, pois são as ações das pessoas que proporcionam a desconstrução dessas barreiras.\r\n2.	Arquitetônica;\r\nBusca eliminar os obstáculos dos ambientes físicos, nas casas, prédios e nos centros comerciais locais.\r\n3.	Comunicacional;\r\nÉ o tipo de acessibilidade que visa minimizar ao máximo as barreiras existentes na comunicação face a face, na escrita em jornais, revistas e no ambiente virtual a famosa acessibilidade digital. \r\n4.	Instrumental;\r\nComo o nome já sugere tem como objetivo vencer os entraves nos instrumentos, dispositivos e ferramentas de aprendizagem, empregabilidade e diversão. \r\n\r\n5.	Metodológica;\r\nPopularmente conhecida como pedagógica, indaga a diminuição dos empecilhos que existem nas metodologias e técnicas de ensino. Tem relação com a maneira que os pedagogos proporcionam conhecimento, aprendizagem, avaliação e inclusão educacional isso é crucial para determinar, ou não, a remoção dos obstáculos pedagógicos.\r\n6.	Programática.\r\nTem como foco principal a eliminação das barreiras presentes na política pública e nos seus derivados.\r\n', '2022-11-27 14:02:13'),
(3, '6383988f01909.png', 'Prêmio de Acessibilidade reconhece iniciativas de inclusão de pessoas com deficiência', '', 'Accessy', 'A 2ª Edição do Prêmio de Acessibilidade publicada no Edital n° 03/2022, lançada pela Secretaria-Executiva do Programa Nacional de Incentivo ao Voluntariado traz um documento com os critérios para a seleção de iniciativas de entidades públicas e privadas.', 'O resultado definitivo será no dia 31 de outubro de 2022, ele divide-se em categorias, sendo elas: Esporte; Empregabilidade; Educação, cultura e arte. A categoria de Educação, cultura e arte incluindo as iniciativas de estímulo da acessibilidade neste contexto, e poderão beneficiar ações que encoraje a participação direta de PCDs (Pessoas com Deficiência) ou que sejam voltadas para este público em específico.', 'Conforme o Edital, será premiada uma iniciativa de promoção da acessibilidade de cada categoria por região do país (Centro-Oeste, Norte, Nordeste, Sudeste e Sul), somando o máximo de quinze iniciativas premiadas. Além de colocar as instituições participantes em evidência, outras premiações poderão ser disponibilizadas aos participantes por meio de parceiros da 2ª Edição do Prêmio de Acessibilidade.', '2022-11-27 14:04:15'),
(4, '638398ce59c7d.png', 'Softwares voltados para acessibilidade são a nova onda do momento', '', 'Accessy', 'Com o avanço da tecnologia, pandemia e o isolamento, aos poucos tarefas realizadas fisicamente, passaram a ser realizadas virtualmente. No Brasil, segundo o Censo Demográfico do IBGE de 2010, há aproximadamente 45 milhões de pessoas que apresentam pelo menos uma das deficiências investigadas. Esse número representa 23,9% da população brasileira. Sabendo disso, os números de usuários que necessitam de acessibilidade no meio digital são consideráveis.', 'A criação de softwares que facilitem as nossas vidas no dia a dia, é muito comum, mas softwares que não só facilitem as tarefas do dia a dia, mas inclua um público considerados as vezes “esquecidos pela sociedade” tem um peso ainda maior tanto moral quanto social, ganhando espaço no mercado e lugar nos holofotes.', 'Trouxemos 3 exemplos desses softwares:\r\n1.	VLibras;\r\n2.	Guiaderodas;\r\n3.	CittaMobi Acessibilidade.\r\n\r\n1.	Vlibras\r\nA suite VLibras é um conjunto de ferramentas gratuitas e de código aberto que traduz conteúdos digitais (texto, áudio e vídeo) em Português para Libras, tornando computadores, celulares e plataformas Web mais acessíveis para as pessoas surdas.\r\nO Vlibras é o resultado de uma parceria entre o Ministério da Economia (ME), por meio da Secretaria de Governo Digital (SGD), e a Universidade Federal da Paraíba (UFPB), através do Laboratório de Aplicações de Vídeo Digital (LAVID). (Governo Digital, 2022?)\r\n2.	Guiaderodas\r\nO Guiaderodas é uma aplicação que tem como objetivo avaliar a acessibilidade dos ambientes para pessoas com dificuldade de locomoção. Esse aplicativo usa a localização do seu smartphone para buscar estabelecimentos comerciais, pontos turísticos e locais importantes próximos a você. Na lista você pode ver quais os locais que são considerados acessíveis ou não, com base nas avaliações realizadas pela comunidade.\r\n3.	CittaMobi Acessibilidade\r\nO Cittamobi é um app de mobilidade urbana, que acompanha em tempo real as linhas de ônibus de cidade brasileiras, presentes em + de 15 estados, muito semelhante o CittaMobi Acessibilidade é uma versão adaptada para pessoas com deficiência visual, oferecido em um aplicativo separado.\r\n', '2022-11-27 14:05:18'),
(5, '638398fd31e1e.png', 'O que é acessibilidade digital? E como isso pode influenciar o mundo', '', 'Accessy', 'Acessibilidade Digital consiste em eliminar os obstáculos que existem na web. O conceito presume que as páginas web sejam projetadas para que qualquer pessoa possa perceber, entender, navegar e interagir de modo efetivo com a páginas.\r\nOs diferentes obstáculos vistos nos sítios eletrônicos afetam principalmente as pessoas com deficiências, seja elas físicas ou intelectuais. Ao navegar na Web e desfrutar de seus recursos, as pessoas com deficiências ou quaisquer limitações, encontram barreiras que não só dificulta, mas frequentemente impossibilita a navegação pelas páginas e seus conteúdos.\r\n', 'Imagine que no mundo 90% dos sites não têm ferramentas de acessibilidade ou recursos que proporcione uma boa experiência para estes usuários, assim já é visível o seu diferencial.\r\nMesmo com um grande público esse grande mercado ainda é inexplorado, um público que busca produtos e serviços acessíveis, mas não tem uma resposta positiva dos fornecedores desses produtos e prestadores de serviços, o que acaba tornando os carentes.\r\n', 'Com um investimento em acessibilidade digital, você pode alavancar seus negócios pois abrirá as portas para 60 milhões de pessoas, gerando inúmeros benefícios, tanto econômicos quanto sociais, pois o processo de inclusão pode até não ser fácil, mas esse já é um passo na direção certa.\r\nO que diz a lei sobre acessibilidade digital?\r\nNo dia 06 de julho de 2015 foi aprovada a Lei Brasileira de Inclusão da Pessoa com Deficiência (Lei 13.146). Esta lei impõe a acessibilidade obrigatória nos sites da internet desenvolvidos por empresas com sede ou representação comercial no País ou por órgãos de governo. Porém infelizmente não foi o bastante para que pudéssemos mudar essa situação, incluindo todas essas pessoas.\r\n', '2022-11-27 14:06:05'),
(6, '6383993c0f444.png', 'O que é Acessibilidade? ', '', 'Accessy', 'É comum enfrentarmos diversas situações em que a acessibilidade se faz presente, porém com o estresse do dia a dia nem nos damos conta. Já reparou em um elevador, o que faz com que um paralelepípedo feito com chapas de aço seja acessível?\r\nAcessibilidade nada mais é que a qualidade de algo acessível, como acessar um lugar, serviço, produto ou informação de maneira segura e autônoma, sem qualquer tipo de obstáculo, favorecendo a todas as pessoas, tendo deficiências ou não, durante todas as etapas da vida.\r\n', 'Qual o objetivo da acessibilidade?\r\nA acessibilidade tem como principal objetivo conceder a todas as pessoas o benefício que é a mobilidade e a autonomia, proporcionando aquelas que tem suas capacidades reduzidas e/ou seu desempenho prejudicado, para que todos tenham a chance de desfrutar dos ambientes e das relações de um modo geral com mais segurança e tranquilidade.\r\n', 'Quais são os tipos de acessibilidade?\r\nCom base nos estudos do pesquisador Romeu Kasumi Sassaki, pode-se constatar seis tipos de acessibilidade:\r\n1.	Atitudinal;\r\nDiz respeito ao entendimento do outro sem preconceitos, estigmas, estereótipos e discriminações. Todos os outros tipos de acessibilidade têm relação com este, pois são as ações das pessoas que proporcionam a desconstrução dessas barreiras.\r\n2.	Arquitetônica;\r\nBusca eliminar os obstáculos dos ambientes físicos, nas casas, prédios e nos centros comerciais locais.\r\n3.	Comunicacional;\r\nÉ o tipo de acessibilidade que visa minimizar ao máximo as barreiras existentes na comunicação face a face, na escrita em jornais, revistas e no ambiente virtual a famosa acessibilidade digital. \r\n4.	Instrumental;\r\nComo o nome já sugere tem como objetivo vencer os entraves nos instrumentos, dispositivos e ferramentas de aprendizagem, empregabilidade e diversão. \r\n\r\n5.	Metodológica;\r\nPopularmente conhecida como pedagógica, indaga a diminuição dos empecilhos que existem nas metodologias e técnicas de ensino. Tem relação com a maneira que os pedagogos proporcionam conhecimento, aprendizagem, avaliação e inclusão educacional isso é crucial para determinar, ou não, a remoção dos obstáculos pedagógicos.\r\n6.	Programática.\r\nTem como foco principal a eliminação das barreiras presentes na política pública e nos seus derivados.\r\n', '2022-11-27 14:07:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `vrns` varchar(200) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`id`, `nome`, `email`, `feedback`, `vrns`, `mensagem`, `created`) VALUES
(1, 'Isabelle Vicente Oliveira', 'isa@gmail.com', 'muito bom ', 'Sim', 'nada a disse', '2022-10-24 09:10:00'),
(2, 'Gabriela Garcia Guimarães  ', 'gabi@gmail.com ', 'Muito bom. ', 'Sim', 'Adorei a forma que são abordados os temas. ', '2022-11-08 16:15:20'),
(3, 'Marcos Maia de Moraes', ' marquinhosp029@gmail.com ', 'Muito bom.', 'Sim ', 'A facilidade de encontrar as informações.', '2022-11-08 16:15:20'),
(4, 'Patrícia Pacholok Portella', 'paty377@gmail.com', 'Bom', 'Sim ', 'Favoritar os cursos para eu não precisar ficar lembrando, ajudo demais. ', '2022-11-08 16:17:40'),
(5, 'Bernardo Bartolomeu Bernardes', 'bbb05@gmail.com', 'Bom', 'Sim ', 'Não sou deficiente auditivo, mas curti muito a ferramenta de libras da plataforma, usei mesmo sem precisar kkk.', '2022-11-08 16:17:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--

CREATE TABLE `tb_cursos` (
  `id` int(11) NOT NULL,
  `nome_curso` varchar(200) NOT NULL,
  `descricao_curso` varchar(500) NOT NULL,
  `fornecedor_curso` varchar(220) NOT NULL,
  `horario_curso` varchar(500) NOT NULL,
  `nivel_curso` varchar(220) NOT NULL,
  `contato_curso` varchar(500) NOT NULL,
  `link_curso` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`id`, `nome_curso`, `descricao_curso`, `fornecedor_curso`, `horario_curso`, `nivel_curso`, `contato_curso`, `link_curso`) VALUES
(1, 'Inglês', 'Neste curso você aprenderá o básico necessário, para se desenvolver na língua inglesa, sua cultura e costumes. Sua forma de pronúncia e os conceitos de presente, passado e futuro.\r\nAll english, do básico ao avançado.\r\n', 'Fii', '50', 'Básico', '(11) 91234-5678', ''),
(2, 'Inglês', 'Com esse curso será possível ter mais profundidade no idioma, alcançando assim o nível intermediário, sua pronúncia e suas figuras de linguagem. As maneiras de se referir a algo ou alguém, facilitando a comunicação interpessoal.\r\nAll english, do básico ao avançado.\r\n', 'Fii', '50', 'Intermediário', '(11) 91234-5678', ''),
(3, 'Inglês', 'A fase final de nosso curso, a parte crucial se você deseja dominar verdadeiramente o inglês, com ele você praticará o pensar em inglês, hábito muito importante para um verdadeiro falante da língua inglesa.\r\nAll english, do básico ao avançado.\r\n', 'Fii', '50', 'Avançado', '(11) 91234-5678', ''),
(4, 'Programação', 'Este curso é destinado àqueles que desejam se tornar futuros desenvolvedores, com módulos impecáveis, separados em linguagens, totalizando 4 módulos de 30 horas cada, neles são abordados desde o front-end ao back-end. Para que você seja um profissional full stack completo.\r\nLiguagens presentes no curso:\r\nMódulo 1: HTML/CSS\r\nMódulo 2: JavaScript\r\nMódulo 3: PHP\r\nMódulo 4: Python\r\nTech and Information, do noob ao pro\r\n', 'aDd', '120', '(Básico, Intermediário e avançado)', '(11) 91234-5678', ''),
(5, 'Gastronomia', 'A cozinha mais renomada de toda Espanha, traz a oportunidade para aqueles que sonham em se tornar verdadeiros chefs, um curso de gastronomia, que tem como objetivo levar a alegria, e é claro uma comida deliciosa, para os amantes da culinária.\r\nEl toro chef, la comida, mas deliciosa del mundo.\r\n', 'avava', '80', 'Intermediário', '(11) 91234-5678', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id` int(11) NOT NULL,
  `nome_da_empresa` varchar(200) NOT NULL,
  `CNPJ` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `contato` varchar(500) NOT NULL,
  `biografia` varchar(500) NOT NULL,
  `area_de_atuacao` varchar(200) NOT NULL,
  `faixa_salarial` varchar(200) NOT NULL,
  `descricao_da_vaga` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_empresa`
--

INSERT INTO `tb_empresa` (`id`, `nome_da_empresa`, `CNPJ`, `senha`, `contato`, `biografia`, `area_de_atuacao`, `faixa_salarial`, `descricao_da_vaga`, `created`) VALUES
(1, 'La Gestion ', '23.074.823/0001-85 ', 'Gestion@01', '(11) 91234-5678', ' La Gestion é uma empresa francesa responsável em administrar os recursos materiais de empresas de todo o Brasil, atualmente com sede em São Paulo capital. ', 'Administração ', '2.300,00', 'Precisamos de profissionais capacitados na área, e que saibam se comunicar em francês. Visamos sempre o bem-estar de nossos funcionários, proporcionando a eles diversos benefícios, alguns deles são, vale transporte, plano de saúde, entre outros. ', '2022-11-08 16:38:00'),
(2, 'Die Schneider-Medien', '43.297.264/0001-12 ', 'Schneider-Medien2002 ', '(11) 91234-5678 ', 'Die Schneider-Medien a primeira empresa alemã constituída apenas por mulheres, responsável por desenvolver e executar todo o projeto de marketing das multinacionais alemãs. ', 'Marketing ', '1.800,00 € ', 'Buscamos mulheres de todas as idades que tenham o objetivo de crescer profissionalmente, que possuam inglês intermediário, e/ou saibam se comunicar em alemão, vaga home office. Disponibilizamos a “hora da mulher” uma hora para que possamos respirar e realizar atividades em conjunto, para que haja assim uma melhor relação entre nossas funcionárias.', '2022-11-08 16:38:00'),
(3, 'Pure Soul ', '94.153.943/0001-04 ', '94.153.943/0001-04 ', '(11) 91234-5678 ', 'A Pure Soul é uma rede de hospitais particulares que busca, proporcionar aos seus pacientes uma ótima experiência, pois todos sabemos que hospitais não são tão agradáveis, com ambientes decorados e médicos muito bem capacitados.', 'Recepção', '2.100,00 ', 'Vaga em questão é para recepcionista, sem necessidade de experiência, com ótimos benefícios, como horário flexível, assistência médica, assistência odontológica e seguro de vida. Venha tornar a Pure Soul ainda mais completa.  ', '2022-11-08 16:38:00'),
(4, 'Plastic World ', '18.384.205/0001-28 ', 'plastic*world ', '(11) 91234-5678', 'A Plastic World é uma empresa americana de embalagens com franquias no mundo todo, criada a partir do sonho de um pai, que não teve a oportunidade de realizar este sonho em vida. ', 'Recepção', '3.400,00', 'Vaga em questão é para recepcionista, sem necessidade de experiência, com ótimos benefícios, como horário flexível, assistência médica, assistência odontológica e seguro de vida. Venha tornar a Pure Soul ainda mais completa.  \r\n\r\n ', '2022-11-08 16:38:00'),
(5, 'Dev Systems ', '64.392.047/0001-38 ', 'dev.systemsmoreira ', '(11) 91234-5678 ', 'Moreira Dev Systems é uma empresa nacional, localizada em Santa Catarina, que produz sistemas para clientes do mundo todo, com foco em proporcionar um ambiente inclusivo e agradável, a MDV traz com ela uma bagagem enorme, pelo seu tempo de mercado. ', 'Programação', '5.240,00', 'Abrindo as portas para você desenvolvedor, que deseja mostrar o seu talento para o mundo. Como requisitos precisamos de um dev que saiba lógica de programação, tenha um inglês intermediário e estar aberto a aprender novas linguagens. ', '2022-11-08 16:38:00'),
(6, 'Simas turbo', '6969 ', 'Senha123', '(11)6969', 'Melhor empresa automotiva, SIMASTURBOOOOOOOOOOOOOOOOOOOOOOO', 'Mêcanica SImas', '100000000000000000000', 'Vaga para mecanico da simas turbo', '2022-11-25 16:27:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `adm` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `cpf` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `celular` varchar(500) NOT NULL,
  `biografia` varchar(1000) NOT NULL,
  `area_de_atuacao` varchar(500) NOT NULL,
  `faixa_salarial` varchar(500) NOT NULL,
  `empresa_atual` varchar(500) NOT NULL,
  `cursos_que_tenho_interesse` varchar(500) NOT NULL,
  `experiencia_profissional` varchar(500) NOT NULL,
  `favoritar` varchar(255) DEFAULT NULL,
  `favoritar_curso` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modification` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`adm`, `id`, `nome`, `email`, `senha`, `cpf`, `telefone`, `celular`, `biografia`, `area_de_atuacao`, `faixa_salarial`, `empresa_atual`, `cursos_que_tenho_interesse`, `experiencia_profissional`, `favoritar`, `favoritar_curso`, `created`, `modification`) VALUES
(1, 1, 'Isabelle ', 'isa@gmail.com', '12345', '12143431414-0', '(11)554998878', '(11)554998878', 'Olá meu nome é Isabelle uma das desenvolvedoras de site', 'Desenvolvimento de Sistemas', '2000', 'Estudande', 'Ingles', 'não tenho', '1,2,4', '2,3', '2022-11-08 20:33:40', NULL),
(NULL, 2, 'Enrico lindo', 'enrico@gmail.com', '123456789', '121212w122-x', '(12) 9982-39235', '(12) 9982-39235', 'Meu nome é Lucas Lima tenho 26 anos e sou um motorista a 12 anos, conhece todos os lugares de São Paulo e estou pronto para trabalha. ', 'Dev', '100000000000', 'ingles fluente e programação', 'ingles fluente e programação', 'Empresa TOP', NULL, NULL, '2022-11-08 20:33:40', '2022-11-23 20:09:23'),
(NULL, 3, 'Gabriela Vieria ', 'gabiviera@gmail.com', '7654', '87988689-x', '(11) 90798212', '(11) 90798212', 'Olá tenho 24 e a três anos descobrir que tenho uma doença no olho esquento, que vai me deixar cega de um olho ao logo do tempo ', 'Manutenção ', '2300', 'Mercuryo', 'ingles', 'Mercuryo 2017-2020', '1,2,3,4,5', '1,2,3,4,5', '2022-11-08 20:33:40', NULL),
(NULL, 4, 'Marie Ferreira', 'marie@ferreira.gmail.com', '11111', '432113121-x', '(11) 9083-20335', '(11) 9083-20333', 'Recém-formada em administração de empresas na UEMG. Atualmente, estou à procura de uma vaga de assistente administrativa. Sou entusiasmada, amigável e ambiciosa e dedicada a executar qualquer tarefa com precisão e prontidão. Gosto de trabalhar em equipe em ambientes com grande movimentação e construir relações positivas com os clientes e o público. Mantenho sempre uma atitude positiva, combinando trabalho duro e dedicação com senso de humor. Possuo experiència como representante de vendas na loj', 'Administração ', '2389', 'não tem ', 'ingles', 'não tenho', '1,3', '1,3', '2022-11-08 20:33:40', NULL),
(NULL, 5, 'Jose Barbosa', 'jose@batbosa@gmail.com', '2222', '1213331323131-X', '(13) 789279232', '(13) 789279232', 'Estudante de administração de empresa, cursando o segundo ano de Administração na universidade PUC-Rio. Possuo excelentes habilidades analiticas e numéricas e, também, habilidades de atendimento ao cliente e vendas devido a meu trabalho como vendedor na Livraria Saraiva. Tenho atitude positiva, sou profissional e possuo habilidades de comunicação eficazes, sendo capaz de me comunicar com todos tipos de pessoas. Minha determinação e dedicação são demonstradas pela minha conquista de diversas bols', 'Administração ', '2500', 'Neo empary ', 'ingles', 'Neo empary ', '1,4', '1,4', '2022-11-08 20:33:40', NULL),
(NULL, 11, 'Teste', 'teste33333@gmail.com', '12345', '12345', '123123', '123123', '123', '123123', '123123', '3123123', '3123123', '3123123', NULL, NULL, '2022-11-25 18:15:31', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vagas`
--

CREATE TABLE `tb_vagas` (
  `id` int(11) NOT NULL,
  `nome_vaga` varchar(200) NOT NULL,
  `descricao_vaga` varchar(500) NOT NULL,
  `salario_vaga` varchar(220) NOT NULL,
  `nivel_vaga` varchar(500) NOT NULL,
  `horario_vaga` varchar(220) NOT NULL,
  `contato_vaga` varchar(100) NOT NULL,
  `link_vaga` varchar(220) NOT NULL,
  `path` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_vagas`
--

INSERT INTO `tb_vagas` (`id`, `nome_vaga`, `descricao_vaga`, `salario_vaga`, `nivel_vaga`, `horario_vaga`, `contato_vaga`, `link_vaga`, `path`) VALUES
(1, 'Administração PCD', 'La Gestion é uma empresa francesa responsável em administrar os recursos materiais de empresas de todo o Brasil, atualmente com sede em São Paulo capital. Precisamos de profissionais capacitados na área, e que saibam se comunicar em francês. Visamos sempre o bem-estar de nossos funcionários, proporcionando a eles diversos benefícios, alguns deles são, vale transporte, plano de saúde, entre outros.', '2100', 'Intermediário', '06h – 17h ', ' (11) 9123', '', 'arquivos/635f09d3ec531.png'),
(2, 'Recursos Humanos PCD', 'Recursos Humanos PCD', '3400', 'Avançado', '08h – 16h ', '(11) 91234', '', 'arquivos/635f0a334ee0c.png'),
(3, 'Programador PCD', 'Moreira Dev Systems é uma empresa nacional, localizada em Santa Catarina, que produz sistemas para clientes do mundo todo, com foco em proporcionar um ambiente inclusivo e agradável, a MDV traz com ela uma bagagem enorme, pelo seu tempo de mercado, abrindo as portas para você desenvolvedor, que deseja mostrar o seu talento para o mundo. ', '5240', 'Intermediário', 'Intermediário', '(11) 91234', '', 'arquivos/635f0a806ddf1.png'),
(4, 'Recepção PCD', 'A Pure Soul é uma rede de hospitais particulares que busca, proporcionar aos seus pacientes uma ótima experiência, pois todos sabemos que hospitais não são tão agradáveis, com ambientes decorados e médicos muito bem capacitados. Vaga em questão é para recepcionista, sem necessidade de experiência, com ótimos benefícios, como horário flexível, assistência médica, assistência odontológica e seguro de vida. Venha tornar a Pure Soul ainda mais completa. ', '2100', 'Básico', '07h – 14h ', '(11) 91234', '', 'arquivos/635f0ab42f7fa.png'),
(5, 'Marketing PCD', 'Die Schneider-Medien a primeira empresa alemã constituída apenas por mulheres, responsável por desenvolver e executar todo o projeto de marketing das multinacionais alemãs. Buscamos mulheres de todas as idades que tenham o objetivo de crescer profissionalmente, que possuam inglês intermediário, e/ou saibam se comunicar em alemão, vaga home office. Disponibilizamos a “hora da mulher” uma hora para que possamos respirar e realizar atividades em conjunto, para que haja assim uma melhor relação entr', '1800', 'Intermediário', '10h – 18h ', '(11) 91234', '', 'arquivos/635f0aef8f70c.png'),
(6, 'Administração PCD', 'Administração PCD', '2300', 'Intermediário', '06h – 17h ', '(11) 91234', '', 'arquivos/635f0b17a22a9.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_vagas`
--
ALTER TABLE `tb_vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_vagas`
--
ALTER TABLE `tb_vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
