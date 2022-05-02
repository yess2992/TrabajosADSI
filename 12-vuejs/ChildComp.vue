<script>
export default {
  data() {
    return {
      countErrors : 0,
      sprite : '',
      sprites: [
        '../public/imgs/sprite00.svg',
        '../public/imgs/sprite01.svg',
        '../public/imgs/sprite02.svg',
        '../public/imgs/sprite03.svg',
        '../public/imgs/sprite04.svg',
        '../public/imgs/sprite05.svg',
        '../public/imgs/sprite06.svg'
      ],
      words: [
        'red', 'yellow', 'blue', 'black', 'white'
      ],
      letters: ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P',
                'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L',
                'Z', 'X', 'C', 'V', 'B', 'N', 'M']
    }
  },
  mounted(){
    this.sprite = this.sprites[this.countErrors]
    this.randomWord()
  },
  props: {
    msg: String
  },
  methods: {
    incrementErrors () {
      if(this.countErrors < 6){
        this.sprite = this.sprites[++this.countErrors]
      }else{
        alert('You are Hanged!')
      }
    },
    randomWord(){
      let rand = Math.floor(Math.random() * this.words.length)
      alert(this.words[rand])
    },
    newGame(){
      this.countErrors = 0
      this.sprite = this.sprites[this.countErrors]
      this.randomWord()
    }
  }
}
</script>

<template>
  <h2 class="text-center font-medium text-2xl uppercase border-b-2 border-[#41b883] w-40 mx-auto">{{ msg || 'No props passed yet' }}</h2>          
  <figure  class="flex justify-center items-center mt-4">
    <img :src="sprite">
  </figure>
  <section class="mx-6 mt-4 flex flex-wrap justify-center items-center">
    <button v-for="letter in letters" class="flex border-2 border-[#35495e] bg-gray-300 w-6 h-6 m-1 rounded-md justify-center items-center font-bold shadow-lg hover:scale-125 transition duration-200 hover:bg-gray-100"> {{ letter }}</button>
  </section>
  <button @click="newGame()" class="bg-[#35495e] text-slate-100 flex mx-auto py-2 px-8 mt-4 rounded-full capitalize hover:scale-110 hover:bg-[#41b883] transition duration-100">New Game</button>
</template>

