-- Limpar tabela anterior (se existir)
DROP TABLE IF EXISTS brawlers;

-- Criar tabela
CREATE TABLE brawlers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(80) NOT NULL,
  raridade VARCHAR(30),
  vida_base INT,
  dano_base INT,
  super_base INT,
  crescimento_vida INT,
  crescimento_dano INT,
  crescimento_super INT,
  alcance VARCHAR(50),
  recarga VARCHAR(50),
  velocidade VARCHAR(50),
  descricao TEXT,
  imagem VARCHAR(255),
  url VARCHAR(255),
  video VARCHAR(255)
);

-- Inserir Brawlers RARO
INSERT INTO brawlers (nome, raridade, vida_base, dano_base, super_base, crescimento_vida, crescimento_dano, crescimento_super, alcance, recarga, velocidade, descricao, imagem, url, video) VALUES
('Nita', 'Raro', 6800, 360, 1200, 680, 36, 120, 'Curto', 'Média', 'Média', 'Nita é feroz e nunca desiste de uma luta. O urso de pelúcia que ela usa como gorro dá um dica aos adversários: não se aproxime do urso!', 'img/Nita.png', 'https://brawlstars.fandom.com/wiki/Nita', 'img/Nita_.mp4'),
('Brock', 'Raro', 5600, 340, 1200, 560, 34, 120, 'Longo', 'Rápida', 'Média', 'Quem vê o Brock todo estilosão gritando ao jogar videogame (seu hobby preferido) não acredita que o cara é introvertido. É melhor não dar mole, pois ele vai fazer tudo para ganhar!', 'img/Brock.png', 'https://brawlstars.fandom.com/wiki/Brock', 'img/Brock_.mp4'),
('Colt', 'Raro', 5600, 320, 1200, 560, 32, 120, 'Longo', 'Rápida', 'Média', 'Todo mundo que visita o Starr Park quer ver o Colt de perto, pois o cara é boa-pinta, carismático e cheio de truques com suas pistolas. A única que não entende o sucesso dele é a Shelly.', 'img/Colt.png', 'https://brawlstars.fandom.com/wiki/Colt', 'img/Colt_.mp4'),
('Bull', 'Raro', 8200, 420, 1800, 820, 42, 180, 'Curto', 'Lenta', 'Lento', 'Como todo milenial, Bull já não é o touro selvagem de antes, é meio careta e tem até horário para dormir. Mas cuidado! Ele ainda faz picadinho de quem pisa na bola.', 'img/Bull.png', 'https://brawlstars.fandom.com/wiki/Bull', 'img/Bull_.mp4'),
('El Primo', 'Raro', 8000, 360, 800, 600, 36, 80, 'Curto', 'Rápida', 'Rápida', 'El Primo gosta de se exibir no ringue e nasceu para isso. Todo mundo delira quando ele entra em cena. Alguns de alegria, outro de dor mesmo...', 'img/Elprimo.png', 'https://brawlstars.fandom.com/wiki/El_Primo', 'img/ElPrimo_.mp4'),
('Barley', 'Raro', 5200, 380, 1200, 520, 38, 120, 'Médio', 'Lenta', 'Média', 'Um barman-robô projetado para preparar bebidas e entreter clientes, Barley faz questão de deixar o bar sempre brilhando. Se precisar, ele usa os baderneiros como pano de chão.', 'img/brawlers/Barley.png', 'https://brawlstars.fandom.com/wiki/Barley', 'img/Barley_.mp4'),
('Poco', 'Raro', 6200, 340, 1400, 620, 34, 140, 'Médio', 'Média', 'Média', 'Poco acredita no poder curativo da música e, por isso está sempre tocando (mesmo quando pedem para ele parar).', 'img/Poco.png', 'https://brawlstars.fandom.com/wiki/Poco', 'img/Poco_.mp4'),
('Rosa', 'Raro', 8200, 280, 1200, 820, 28, 120, 'Curto', 'Média', 'Média', 'Rosa é uma botânica muito ligada às plantas. Ela também é boxeadora e não vacila em plantar a mão na cara de quem a desobedecer!', 'img/Rosa.png', 'https://brawlstars.fandom.com/wiki/Rosa', 'img/Rosa_.mp4'),

-- Inserir Brawlers SUPER-RARO (exemplo)
('Carl', 'Super-Raro', 6400, 340, 1400, 640, 34, 140, 'Médio', 'Lenta', 'Lenta', 'Carl é um robô-minerador fascinado por pedra... Pedras não, rochas. Se não quiser que ele vire uma matraca, é melhor nem falar de gemas, ou serão horas de palestrinha sobre os efeitos delas.', 'img/Carl.png', 'https://brawlstars.fandom.com/wiki/Carl', 'img/Carl_.mp4'),
('Jacky', 'Super-Raro', 7600, 360, 1600, 760, 36, 160, 'Curto', 'Média', 'Lenta', 'Jacky é uma operária de boca um pouco suja na hora de falar sobre o trabalho. É uma sorte do @&*$#% que os palavrões sejam abafados pelo barulho da sua britadeira.', 'img/Jacky.png', 'https://brawlstars.fandom.com/wiki/Jacky', 'img/Jacky_.mp4'),
('Rico', 'Super-Raro', 5600, 340, 1200, 560, 34, 120, 'Longo', 'Rápida', 'Média', 'O quê? Máquinas de chiclete? Claro que não... O Rico é um caçador espacial de recompensas que persegue os criminosos mais procurados da galáxia!', 'img/Rico.png', 'https://brawlstars.fandom.com/wiki/Rico', 'img/Rico_.mp4'),
('Gus', 'Super-Raro', 6800, 320, 1200, 680, 32, 120, 'Médio', 'Média', 'Média', 'Gus se parece demais com uma daquelas crianças fantasmas de filmes, sabe? É tão parecido que muita gente se assusta quando ele passa. Ainda bem que ele nem liga, pois ele ama o sobrenatural!', 'img/Gus.png', 'https://brawlstars.fandom.com/wiki/Gus', 'img/Gus_.mp4'),
('Darryl', 'Super-Raro', 7800, 360, 1600, 780, 36, 160, 'Curto', 'Média', 'Lenta', 'Darryl virou capitão para fugir do trabalho pesado, mas agora é obrigado a defender o navio. Parece que o tiro saiu pela culatra...', 'img/Darryl.png', 'https://brawlstars.fandom.com/wiki/Darryl', 'img/Darryl_.mp4'),
('Jessie', 'Super-Raro', 5800, 380, 1200, 580, 38, 120, 'Médio', 'Rápida', 'Média', 'Apesar de ser um verdadeiro prodígio e construir armas com sucata, Jessie não passa de uma garotinha aos olhos de sua mãe, Pam.', 'img/Jessie.png', 'https://brawlstars.fandom.com/wiki/Jessie', 'img/Jessie_.mp4'),
('Tick', 'Super-Raro', 5200, 340, 1000, 520, 34, 100, 'Médio', 'Lenta', 'Lenta', 'Tick segue Penny por tudo como um cachorrinho. Ele não colabora muito com os planos e apenas explode as coisas por perto, mas isso já é uma ajuda e tanto!', 'img/Tick.png', 'https://brawlstars.fandom.com/wiki/Tick', 'img/Tick_.mp4'),
('Dynamike', 'Super-Raro', 5200, 380, 1200, 520, 38, 120, 'Médio', 'Lenta', 'Média', 'Dynamike é um garimpeiro aposentado que, depois de vários anos usando dinamites, ficou obcecado com explosões. Ano-Novo, aniversários, batalhas... tudo é um BOOOM motivo para explodir algo!', 'img/Dynamike.png', 'https://brawlstars.fandom.com/wiki/Dynamike', 'img/Dynamike_.mp4'),

-- Inserir Brawlers ÉPICO (exemplo)
('Stu', 'Épico', 6400, 360, 1200, 640, 36, 120, 'Médio', 'Média', 'Média', 'Stu é um inventor maluco que constrói seus próprios carros blindados.', 'img/Stu.png', 'https://brawlstars.fandom.com/wiki/Stu', 'img/Stu_.mp4'),
('Piper', 'Épico', 5200, 540, 1000, 520, 54, 100, 'Longo', 'Lenta', 'Média', 'Piper é uma atiradora de elite que não erra.', 'img/Piper.png', 'https://brawlstars.fandom.com/wiki/Piper', 'img/Piper_.mp4'),
('Pam', 'Épico', 7600, 280, 1200, 760, 28, 120, 'Médio', 'Média', 'Média', 'Pam é a mãe de Jessie e não deixa ninguém mexer com sua filha.', 'img/Pam.png', 'https://brawlstars.fandom.com/wiki/Pam', 'img/Pam_.mp4');
