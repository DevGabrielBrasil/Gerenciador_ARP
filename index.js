// Funcionalidade do script Java (substitua "// Funcionalidade..." pelo seu código)
function handleFormSubmit(event) {
    // ... Seu código Java para a funcionalidade desejada ...
  }
  
  const form = document.querySelector('.formulario');
  form.addEventListener('submit', handleFormSubmit);
  
  // Cálculo da data limite (já incluso no código anterior)
  const dataValidadeInput = document.getElementById('data_validade');
  const dataLimiteInput = document.getElementById('data_limite');
  
  dataValidadeInput.addEventListener('change', function() {
    const dataValidade = new Date(this.value);
    const dataLimite = dataValidade.setDate(dataValidade.getDate() + 365);
    dataLimiteInput.value = dataLimite.toISOString().substring(0, 10);
  });
  