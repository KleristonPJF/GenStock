document.addEventListener("DOMContentLoaded", function () {
    const valorComprado = document.getElementById("valorcomprado");
    const porcentagem = document.getElementById("porcentagem");
    const resultado = document.getElementById("resultado");

    function calcularPrecoVenda() {
        const valor = parseFloat(valorComprado.value);
        const porcentagemValor = parseFloat(porcentagem.value);

        if (!isNaN(valor) && !isNaN(porcentagemValor)) {
            const precoVenda = valor + (valor * (porcentagemValor / 100));
            resultado.textContent = `Preço de Venda: R$ ${precoVenda.toFixed(2)}`;
        } else {
            resultado.textContent = "Por favor, insira valores válidos.";
        }
    }

    valorComprado.addEventListener("input", calcularPrecoVenda);
    porcentagem.addEventListener("input", calcularPrecoVenda);
});
