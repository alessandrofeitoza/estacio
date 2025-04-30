let clientes = [
    { id: 1, nome: "Carlos Eduardo", email: "carlos.eduardo@gmail.com", telefone: "(11) 9 8765-4321", endereco: "Av. Paulista, 1000 - São Paulo, SP", observacao: "Cliente antigo" },
    { id: 2, nome: "Mariana Silva", email: "mariana.silva@yahoo.com", telefone: "(21) 9 8123-4567", endereco: "Rua das Laranjeiras, 45 - Rio de Janeiro, RJ", observacao: "" },
    { id: 3, nome: "João Pedro Almeida", email: "joao.almeida@hotmail.com", telefone: "(31) 9 9988-7766", endereco: "Rua Tupis, 300 - Belo Horizonte, MG", observacao: "Indicado por cliente VIP" },
    { id: 4, nome: "Ana Beatriz Costa", email: "ana.costa@outlook.com", telefone: "(41) 9 9222-3344", endereco: "Rua XV de Novembro, 55 - Curitiba, PR", observacao: "" },
    { id: 5, nome: "Lucas Fernandes", email: "lucasfernandes@gmail.com", telefone: "(85) 9 9001-1122", endereco: "Rua José Bastos, 980 - Fortaleza, CE", observacao: "Solicitou orçamento em 2023" },
    { id: 6, nome: "Bruna Rocha", email: "bruna.rocha@gmail.com", telefone: "(71) 9 9333-5566", endereco: "Av. Paralela, 123 - Salvador, BA", observacao: "" },
    { id: 7, nome: "Thiago Martins", email: "thiago.martins@hotmail.com", telefone: "(62) 9 9987-1122", endereco: "Rua T-63, 700 - Goiânia, GO", observacao: "Comprou pacote premium" },
    { id: 8, nome: "Juliana Mendes", email: "juliana.mendes@gmail.com", telefone: "(51) 9 9555-4433", endereco: "Rua Lima e Silva, 203 - Porto Alegre, RS", observacao: "" },
    { id: 9, nome: "Felipe Oliveira", email: "felipe.oliveira@yahoo.com", telefone: "(27) 9 9111-2299", endereco: "Av. Vitória, 500 - Vitória, ES", observacao: "Ligou pedindo desconto" },
    { id: 10, nome: "Camila Ribeiro", email: "camila.ribeiro@uol.com.br", telefone: "(95) 9 9444-8877", endereco: "Rua dos Ypês, 80 - Boa Vista, RR", observacao: "" },
    { id: 11, nome: "Rafael Souza", email: "rafael.souza@gmail.com", telefone: "(92) 9 9788-6655", endereco: "Av. Constantino Nery, 150 - Manaus, AM", observacao: "" },
    { id: 12, nome: "Larissa Teixeira", email: "larissa.teixeira@hotmail.com", telefone: "(98) 9 9312-4789", endereco: "Rua Grande, 300 - São Luís, MA", observacao: "Participa de promoções" },
    { id: 13, nome: "Daniel Lima", email: "daniel.lima@gmail.com", telefone: "(19) 9 9003-1111", endereco: "Av. Francisco Glicério, 250 - Campinas, SP", observacao: "" },
    { id: 14, nome: "Patrícia Andrade", email: "patricia.andrade@yahoo.com", telefone: "(61) 9 8566-7722", endereco: "SQS 308, Bloco B - Brasília, DF", observacao: "Solicitou segunda via" },
    { id: 15, nome: "André Costa", email: "andre.costa@bol.com.br", telefone: "(84) 9 8777-3344", endereco: "Rua Princesa Isabel, 123 - Natal, RN", observacao: "" },
    { id: 16, nome: "Renata Gomes", email: "renata.gomes@gmail.com", telefone: "(67) 9 9223-1122", endereco: "Rua 14 de Julho, 321 - Campo Grande, MS", observacao: "" },
    { id: 17, nome: "Pedro Henrique", email: "pedro.henrique@globo.com", telefone: "(43) 9 9789-4455", endereco: "Av. Higienópolis, 88 - Londrina, PR", observacao: "Cliente VIP" },
    { id: 18, nome: "Fernanda Lima", email: "fernanda.lima@gmail.com", telefone: "(35) 9 9112-6677", endereco: "Rua Tiradentes, 410 - Varginha, MG", observacao: "" },
    { id: 19, nome: "Gabriel Dias", email: "gabriel.dias@hotmail.com", telefone: "(82) 9 9334-5522", endereco: "Rua do Sol, 90 - Maceió, AL", observacao: "" },
    { id: 20, nome: "Isabela Nogueira", email: "isabela.nogueira@gmail.com", telefone: "(88) 9 9766-8899", endereco: "Rua São José, 200 - Juazeiro do Norte, CE", observacao: "Fez elogios no atendimento" },
    { id: 21, nome: "Rodrigo Barros", email: "rodrigo.barros@gmail.com", telefone: "(31) 9 9111-2233", endereco: "Av. do Contorno, 1420 - BH, MG", observacao: "" },
    { id: 22, nome: "Tatiane Freitas", email: "tatiane.freitas@yahoo.com", telefone: "(21) 9 9888-1122", endereco: "Rua Voluntários da Pátria, 76 - Niterói, RJ", observacao: "" },
    { id: 23, nome: "Marcelo Cunha", email: "marcelo.cunha@gmail.com", telefone: "(11) 9 9333-4455", endereco: "Rua Augusta, 1990 - São Paulo, SP", observacao: "" },
    { id: 24, nome: "Débora Martins", email: "debora.martins@hotmail.com", telefone: "(92) 9 9012-7788", endereco: "Av. Djalma Batista, 400 - Manaus, AM", observacao: "" },
    { id: 25, nome: "Eduardo Pires", email: "eduardo.pires@gmail.com", telefone: "(63) 9 9123-8877", endereco: "Rua JK, 120 - Palmas, TO", observacao: "" },
    { id: 26, nome: "Aline Araújo", email: "aline.araujo@yahoo.com", telefone: "(62) 9 9333-0001", endereco: "Rua 10, Setor Oeste - Goiânia, GO", observacao: "" },
    { id: 27, nome: "Bruno Batista", email: "bruno.batista@gmail.com", telefone: "(48) 9 9888-2222", endereco: "Rua Vidal Ramos, 500 - Florianópolis, SC", observacao: "" },
    { id: 28, nome: "Elaine Souza", email: "elaine.souza@hotmail.com", telefone: "(85) 9 9999-1111", endereco: "Rua João Cordeiro, 155 - Fortaleza, CE", observacao: "Reclamou de atraso" },
    { id: 29, nome: "Henrique Lopes", email: "henrique.lopes@gmail.com", telefone: "(16) 9 9444-6655", endereco: "Av. Independência, 600 - Ribeirão Preto, SP", observacao: "" },
    { id: 30, nome: "Luciana Cardoso", email: "luciana.cardoso@outlook.com", telefone: "(31) 9 9777-2211", endereco: "Rua da Bahia, 2345 - BH, MG", observacao: "" },
    { id: 31, nome: "Vinícius Mendes", email: "vinicius.mendes@gmail.com", telefone: "(81) 9 9765-3344", endereco: "Rua dos Navegantes, 300 - Recife, PE", observacao: "Fez compra em abril" },
    { id: 32, nome: "Natalia Ferreira", email: "natalia.ferreira@yahoo.com", telefone: "(91) 9 9123-5566", endereco: "Av. Nazaré, 456 - Belém, PA", observacao: "" },
    { id: 33, nome: "Samuel Castro", email: "samuel.castro@gmail.com", telefone: "(21) 9 9110-8899", endereco: "Rua do Catete, 170 - Rio, RJ", observacao: "" },
    { id: 34, nome: "Roberta Dias", email: "roberta.dias@hotmail.com", telefone: "(11) 9 9332-4455", endereco: "Rua Frei Caneca, 102 - São Paulo, SP", observacao: "" },
    { id: 35, nome: "Cristiano Leite", email: "cristiano.leite@gmail.com", telefone: "(86) 9 9881-1144", endereco: "Rua Coelho de Resende, 600 - Teresina, PI", observacao: "" },
    { id: 36, nome: "Daniele Moura", email: "daniele.moura@uol.com.br", telefone: "(82) 9 9555-2233", endereco: "Rua do Comércio, 42 - Maceió, AL", observacao: "" },
    { id: 37, nome: "Gustavo Nascimento", email: "gustavo.nasc@gmail.com", telefone: "(75) 9 9677-5566", endereco: "Rua Conselheiro Franco, 130 - Feira de Santana, BA", observacao: "" },
    { id: 38, nome: "Sabrina Oliveira", email: "sabrina.oliveira@gmail.com", telefone: "(27) 9 9002-7788", endereco: "Rua Sete de Setembro, 80 - Vila Velha, ES", observacao: "Quer ser revendedora" },
    { id: 39, nome: "Alexandre Reis", email: "alexandre.reis@hotmail.com", telefone: "(91) 9 9556-3344", endereco: "Rua dos Mundurucus, 321 - Belém, PA", observacao: "" },
    { id: 40, nome: "Letícia Campos", email: "leticia.campos@gmail.com", telefone: "(85) 9 9222-8899", endereco: "Rua Dom Luís, 456 - Fortaleza, CE", observacao: "" },
    { id: 41, nome: "Célio Barbosa", email: "celio.barbosa@outlook.com", telefone: "(61) 9 9654-7766", endereco: "CLN 202, Bloco A - Brasília, DF", observacao: "" },
    { id: 42, nome: "Paula Macedo", email: "paula.macedo@gmail.com", telefone: "(73) 9 9771-5544", endereco: "Rua do Cajueiro, 789 - Ilhéus, BA", observacao: "" },
    { id: 43, nome: "Diego Ramos", email: "diego.ramos@gmail.com", telefone: "(47) 9 9012-6677", endereco: "Rua 15 de Novembro, 170 - Blumenau, SC", observacao: "Atendimento recorrente" },
    { id: 44, nome: "Simone Vieira", email: "simone.vieira@yahoo.com", telefone: "(67) 9 9678-5543", endereco: "Rua Maracaju, 110 - Campo Grande, MS", observacao: "" },
    { id: 45, nome: "Alan Moreira", email: "alan.moreira@globo.com", telefone: "(21) 9 9800-9911", endereco: "Rua da Carioca, 201 - Rio de Janeiro, RJ", observacao: "" },
    { id: 46, nome: "Carla Santos", email: "carla.santos@gmail.com", telefone: "(11) 9 9119-8822", endereco: "Rua Bela Cintra, 1020 - São Paulo, SP", observacao: "" },
    { id: 47, nome: "Bruno Rocha", email: "bruno.rocha@gmail.com", telefone: "(81) 9 9666-7788", endereco: "Rua da Aurora, 312 - Recife, PE", observacao: "Cadastrado via site" },
    { id: 48, nome: "Juliana Castro", email: "juliana.castro@hotmail.com", telefone: "(19) 9 9555-2234", endereco: "Av. Barão de Itapura, 405 - Campinas, SP", observacao: "" },
    { id: 49, nome: "Fernando Lima", email: "fernando.lima@gmail.com", telefone: "(31) 9 9677-8899", endereco: "Rua Curitiba, 1234 - BH, MG", observacao: "" },
    { id: 50, nome: "Tatiane Ribeiro", email: "tatiane.ribeiro@gmail.com", telefone: "(88) 9 9988-2233", endereco: "Rua Padre Cícero, 111 - Juazeiro do Norte, CE", observacao: "" }
];

const TABELA = document.getElementById('tabela-clientes');

TABELA.innerHTML = '';

clientes.forEach(cada => {
    TABELA.innerHTML += `
        <tr>
            <td>${cada.id}</td>
            <td>${cada.nome}</td>
            <td>${cada.email}</td>
            <td>${cada.telefone}</td>
            <td>${cada.endereco}</td>
            <td>${cada.observacao}</td>
            <td>
                <a href="" class="btn btn-outline-warning btn-sm">Editar</a>
                <a href="" class="btn btn-outline-danger btn-sm">Excluir</a>
            </td>
        </tr>
    `;
});

function buscar() {
    let texto = document.getElementById('busca').value;

    let filtrado = clientes.filter(cada => {
        let nome = cada.nome.toLowerCase();

        return nome.includes(texto.toLowerCase());
    });

    TABELA.innerHTML = '';

    filtrado.forEach(cada => {
        TABELA.innerHTML += `
            <tr>
                <td>${cada.id}</td>
                <td>${cada.nome}</td>
                <td>${cada.email}</td>
                <td>${cada.telefone}</td>
                <td>${cada.endereco}</td>
                <td>${cada.observacao}</td>
                <td>
                    <a href="" class="btn btn-outline-warning btn-sm">Editar</a>
                    <a href="" class="btn btn-outline-danger btn-sm">Excluir</a>
                </td>
            </tr>
        `;
    });
}









// let nome = 'Maria';;
// let idade = 25;
// let cidade = 'Maranguape';

// Oi, eu sou Fulana, tenho X anos de idade, e moro em NomeDaCidade

//let frase = "Oi, eu sou " + nome + ", tenho " + idade + " anos de idade, e moro em " + cidade + ".";
// interpolação de strings / template strings
//let frase2 = `Oi, eu sou ${nome}, tenho ${idade} anos de idade, e moro em ${cidade}.`;

//document.write(frase);









