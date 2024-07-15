CREATE DATABASE concessionaria;
USE CONCESSIONARIA;

CREATE TABLE tipo_veiculo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE veiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    cor VARCHAR(20),
    preco DECIMAL(10, 2) NOT NULL,
    tipo_veiculo_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (tipo_veiculo_id) REFERENCES tipo_veiculo (id)
);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255),
    data_nascimento DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(20),
    cargo VARCHAR(50),
    salario DECIMAL(10, 2),
    data_contratacao DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO tipo_veiculo (nome) VALUES ('Carro'), ('Moto');

INSERT INTO veiculos (marca,modelo,ano,cor,preco,tipo_veiculo_id) VALUES
    ('Toyota','Corolla',2020,'Preto',90000.00,1),
    ('Honda','Civic',2019,'Prata',85000.00,1),
    ('Ford','Fiesta',2018,'Vermelho',65000.00,1),
    ('Chevrolet','Onix',2021,'Branco',70000.00,1),
    ('Volkswagen','Gol',2017,'Azul',55000.00,1),
    ('Hyundai','HB20',2020,'Cinza',60000.00,1),
    ('Renault','Sandero',2019,'Verde',58000.00,1),
    ('Fiat','Uno',2016,'Amarelo',45000.00,1),
    ('Nissan','Kicks',2021,'Roxo',95000.00,1),
    ('Jeep','Renegade',2020,'Marrom',110000.00,1),
    ('Peugeot','208',2019,'Preto',75000.00,1),
    ('Citroen','C3',2018,'Prata',72000.00,1),
    ('Mitsubishi','Outlander',2021,'Vermelho',140000.00,1),
    ('Kia','Sportage',2020,'Branco',130000.00,1),
    ('Suzuki','Vitara',2019,'Azul',120000.00,1),
    ('Chevrolet','Cruze',2020,'Cinza',110000.00,1),
    ('Toyota','Yaris',2021,'Verde',90000.00,1),
    ('Honda','Fit',2018,'Amarelo',68000.00,1),
    ('Ford','Ka',2017,'Roxo',50000.00,1),
    ('Volkswagen','Polo',2021,'Marrom',100000.00,1),
    ('Fiat','Mobi',2020,'Preto',47000.00,1),
    ('Hyundai','Creta',2019,'Prata',105000.00,1),
    ('Renault','Duster',2018,'Vermelho',95000.00,1),
    ('Nissan','March',2017,'Branco',48000.00,1),
    ('Jeep','Compass',2021,'Azul',150000.00,1),
    ('Peugeot','3008',2020,'Cinza',160000.00,1);

INSERT INTO veiculos (marca,modelo,ano,cor,preco,tipo_veiculo_id) VALUES
    ('Honda','CB 500',2020,'Preto',32000.00,2),
    ('Yamaha','MT-07',2019,'Prata',35000.00,2),
    ('Suzuki','GSX-S750',2018,'Vermelho',37000.00,2),
    ('Kawasaki','Z650',2021,'Verde',38000.00,2),
    ('Ducati','Monster 797',2020,'Branco',42000.00,2);

INSERT INTO clientes (nome,email,telefone,endereco,data_nascimento) VALUES
    ('João Silva','joao.silva@example.com','11987654321','Rua A, 123, São Paulo, SP','1985-06-15'),
    ('Maria Oliveira','maria.oliveira@example.com','11998765432','Rua B, 456, Rio de Janeiro, RJ','1990-09-20'),
    ('Carlos Santos','carlos.santos@example.com','21987654321','Av. C, 789, Belo Horizonte, MG','1978-03-10'),
    ('Ana Costa','ana.costa@example.com','31998765432','Av. D, 101, Curitiba, PR','1982-12-25'),
    ('Paulo Lima','paulo.lima@example.com','21987651234','Rua E, 112, Porto Alegre, RS','1995-04-05'),
    ('Clara Mendes','clara.mendes@example.com','11987652134','Rua F, 134, Recife, PE','1988-07-18'),
    ('Pedro Almeida','pedro.almeida@example.com','21987653421','Av. G, 156, Salvador, BA','1992-11-09'),
    ('Sofia Ferreira','sofia.ferreira@example.com','31987654321','Rua H, 178, Fortaleza, CE','1985-02-28'),
    ('Ricardo Barbosa','ricardo.barbosa@example.com','11987652341','Rua I, 190, Manaus, AM','1997-05-12'),
    ('Larissa Rocha','larissa.rocha@example.com','21987653412','Av. J, 210, Brasília, DF','1993-08-21');

INSERT INTO funcionarios (nome,email,telefone,cargo,salario,data_contratacao) VALUES
    ('José Souza','jose.souza@example.com','11987654321','Vendedor',3500.00,'2018-01-10'),
    ('Mariana Santos','mariana.santos@example.com','11998765432','Gerente de Vendas',7000.00,'2017-05-15'),
    ('Lucas Almeida','lucas.almeida@example.com','21987654321','Mecânico',4000.00,'2019-03-20'),
    ('Fernanda Lima','fernanda.lima@example.com','31998765432','Atendente',2800.00,'2020-07-25'),
    ('Roberto Oliveira','roberto.oliveira@example.com','21987651234','Supervisor de Estoque',5000.00,'2016-09-05'),
    ('Cláudia Mendes','claudia.mendes@example.com','11987652134','Assistente Administrativo',3200.00,'2018-12-12'),
    ('Pedro Barbosa','pedro.barbosa@example.com','21987653421','Analista Financeiro',4500.00,'2019-11-15'),
    ('Vanessa Rocha','vanessa.rocha@example.com','31987654321','Recepcionista',2500.00,'2021-02-28'),
    ('Carlos Ferreira','carlos.ferreira@example.com','11987652341','Consultor de Vendas',3800.00,'2017-06-18'),
    ('Ana Paula','ana.paula@example.com','21987653412','Analista de Marketing',4800.00,'2018-08-21'),
    ('Rafael Costa','rafael.costa@example.com','11987652123','Gerente de Serviço',6500.00,'2017-10-25'),
    ('Beatriz Gomes','beatriz.gomes@example.com','21987654312','Assistente de Recursos Humanos',3000.00,'2019-05-14'),
    ('Gustavo Pereira','gustavo.pereira@example.com','31987654231','Encarregado de Manutenção',4200.00,'2020-01-30'),
    ('Juliana Martins','juliana.martins@example.com','11987653423','Coordenadora de Vendas',6000.00,'2016-11-08'),
    ('Rodrigo Silva','rodrigo.silva@example.com','21987654123','Chefe de Oficina',5500.00,'2018-03-22');
