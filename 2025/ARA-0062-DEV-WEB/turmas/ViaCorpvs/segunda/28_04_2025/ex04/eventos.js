for (let n = 1; n <= 100; n++) {
    output(n + ' - ');

    if (n % 2 === 0) {
        output('Arri');
    }

    if (n % 5 === 0) {
        output('Egua');
    }

    output('<br>'); 
}


function output(content) {
    if (window.browser) {
        document.write(content);
    } else {
        console.log(content);
    }
}

