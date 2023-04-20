Vue.createApp({
  data() {
    return {
      goals: [],
      enteredValue: '',
      addlink: 'https://brunosvieira88.github.io/CasteloBruxo/',
      aprovado: "Passou",
      reprovado:'Reprovado',
    };
  },
  methods: {
    addGoal(valor) {

        window.location = "/"+valor;
    },
    metodoSaida(){
      let aleatorio = Math.floor(Math.random() * (10 - 1 + 1) + 1);

      return aleatorio >= 6 ? this.aprovado : this.reprovado;
    }
  },
}).mount('#app');



// const buttonEl = document.querySelector('button');
// const inputEl = document.querySelector('input');
// const listEl = document.querySelector('ul');

// function addGoal() {
//   const enteredValue = inputEl.value;
//   const listItemEl = document.createElement('li');
//   listItemEl.textContent = enteredValue;
//   listEl.appendChild(listItemEl);
//   inputEl.value = '';
// }

// buttonEl.addEventListener('click', addGoal);
