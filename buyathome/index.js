function mascaraCPF(campo) {
    let valor = campo.value.replace(/\D/g, '');

    if (valor.length > 11) {
        valor = valor.slice(0, 11);
    }

    valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
    valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
    valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

    campo.value = valor;
}
