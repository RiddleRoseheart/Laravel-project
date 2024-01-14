 @extends('layout')
@section('title', 'Home Page')
@section('content')

<!-- https://codepen.io/amal84/pen/ZEPYRMr -->

<h1>Frequently Asked Questions</h1>
@foreach ($categories as $category)
<div class='faq-container'>
  <div class="faq">
    <h3 class="faq-title">{{ $category->name }}</h3>
    @foreach ($category->questions as $question)
    <h2 class="faq-text">{{ $question->question }}</h2>
    <p class="faq-text">{{ $question->answer }}</p>
    @endforeach
    <button class='faq-toggle'>
      <svg class="chevron w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/> 
  </svg>
      
      <svg class="close w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
  </svg>
    </button>
  </div>
</div>
@endforeach
<style>
    @import url('https://fonts.googleapis.com/css2?family=Comforter&family=Dawning+of+a+New+Day&family=Fredericka+the+Great&family=Henny+Penny&family=Homemade+Apple&family=Island+Moments&family=Rubik+Doodle+Shadow&family=Salsa&family=Sofia&display=swap');




*, *::before, *::after{
  box-sizing: border-box;
}



h1{
  margin: 50px 0 30px;
  text-align: center;
  color: #42225e;


}

.faq-container{
  max-width: 600px;
  margin: 0 auto;
}

.faq{
  background-color: transparent;
  border: 1px solid #A555EC;
  border-radius: 10px;
  padding: 30px;
  margin: 20px 0;
  position: relative;
  overflow: hidden;
  transition: all .4s ease;

}

.faq.active{
  background-color: #FFF8C9;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.1);
  color: #42225e;
}
.faq.active .faq-title{
  
  color: #42225e;
}
.faq-title{
  margin: 0 35px 0 0;
  color: white;

}

.faq-text{
  display: none;
  margin: 30px 0 0;

}

.faq.active .faq-text{
  display: block;
  color: #42225e;
}

.faq-toggle {
  background-color: transparent;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  position: absolute;
  top: 30px;
  right: 30px;
  height: 30px;
  width: 30px;
}

.chevron, .close{
  width: 12px;
  height:12px;
}

.faq-toggle .close{
  display: none;
} 

.faq.active .faq-toggle .close{
  display: block;
}

.faq.active .faq-toggle .chevron{
  display: none;
}

.faq.active .faq-toggle{
  background-color: #A555EC;
  border-radius: 50%;
  color:#ffffd9;
}

body{

color: #444444;
font-family: 'Henny Penny', system-ui !important;

}
</style>

<script>
const buttons = document.querySelectorAll('.faq-toggle');


buttons.forEach(button =>{
  button.addEventListener('click', () =>{
    button.parentNode.classList.toggle('active');
  })
})
 
</script>


@endsection

