# Funções

#### Funções sem parametro e sem retorno
```js
function welcome() {
    document.write("Bem vindo");
}

welcome(); //Mostrar "Bem vindo"
```

#### Funções com parametro e sem retorno
```js
function welcome(nome) {
    document.write(`Bem vinde ${nome}`);
}

welcome("Maria"); //Mostrar "Bem vinde Maria"
```

#### Funções com parametros e sem retorno
```js
function welcome(nome, cidade) {
    document.write(`Bem vinde ${nome}, lá das bandas de ${cidade}`);
}

welcome("Chiquim", "Caucaia"); //Mostrar "Bem vinde Chiquim, lá das bandas de Caucaia"
```




#### Funções com retorno
```js
function welcome() {
    return "Bem vindo";
}

let result = welcome(); 
alert(result); //Mostrar "Bem vindo"
```

---

### Anonym Functions
```js
function somar(n1, n2) {
    return n1 + n2;
}
// somar(10, 20); 



const somar = function (n1, n2) {
    return n1 + n2;
};

somar(20, 20);
```

### Arrow Functions

```js
const somar = (n1, n2) => {
    return n1 + n2;
};

function welcome() {
    return "Bem vindo";
}

const welcome = function () {
    return "Bem vindo";
}

const welcome = () => {
    return "Bem vindo";
}

const welcome = () => "Bem vindo";

```



