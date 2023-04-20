<x-layout title="Portfolio - Bruno Santos Vieira">
    <style>
        .tamanho{
            width: 10%;
            cursor: pointer;

        }
    </style>
    <section style="margin-top:4rem;">
        <?php $cont = "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/"?>
        <div class="container mt-5">
                <h3 class=" text-center">Pequenos Projetos</h3>
            <div class="row card mt-2">
                <div class="d-flex justify-content-between mt-2 p-2">
                    <button type="button" class="btn btn-outline-secondary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal">Calculadora</button>
                    <button class="btn sm-btn btn-outline-secondary btn-sm " onclick="redireciona('/jogovelha')">Jogo da Velha</button>
                    <button class="btn btn-outline-secondary btn-sm "  onclick="redireciona('/jogomemoria')">Jogo da Memoria</button>
                </div>
            </div>
        </div>
        <h3 class="text-center mt-3" style="margin-left:10%;">Minhas aréas de conhecimento</h3>
        <section class="container">
            <div class="row" id="app">
                <div class=" card p-3" style="box-shadow: 2px 2px 3px black;">
                    <div class="d-flex justify-content-between mt-2">
                        <img v-on:click="addGoal('html')" src="<?php echo $cont?>html5/html5-original-wordmark.svg" class="tamanho" />
                        <img v-on:click="addGoal('css')" src="<?php echo $cont?>css3/css3-original-wordmark.svg"  class="tamanho" />
                        <img v-on:click="addGoal('js')" src="<?php echo $cont?>javascript/javascript-original.svg"  class="tamanho" />
                        <img v-on:click="addGoal('java')" src="<?php echo $cont?>java/java-original-wordmark.svg"  class="tamanho" />
                        <img v-on:click="addGoal('mysql')" src="<?php echo $cont?>mysql/mysql-original-wordmark.svg"  class="tamanho" />
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <img v-on:click="addGoal('bootstrap')" src="<?php echo $cont?>bootstrap/bootstrap-original.svg" class="tamanho" />
                        <img v-on:click="addGoal('php')" src="<?php echo $cont?>php/php-original.svg"  class="tamanho" />
                        <img v-on:click="addGoal('laravel')" src="<?php echo $cont?>laravel/laravel-plain.svg"  class="tamanho" />
                        <img v-on:click="addGoal('spring')" src="<?php echo $cont?>spring/spring-original.svg"  class="tamanho" />
                        <img v-on:click="addGoal('vue')" src="<?php echo $cont?>vuejs/vuejs-plain.svg"  class="tamanho" />
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <img v-on:click="addGoal('html')" src="<?php echo $cont?>vuejs/vuejs-original.svg" class="tamanho" />
                        <img v-on:click="addGoal('python')" src="<?php echo $cont?>/python/python-original.svg"  class="tamanho" />
                        <img v-on:click="addGoal('django')" src="<?php echo $cont?>django/django-plain-wordmark.svg"  class="tamanho" />
                        <img v-on:click="addGoal('git')" src="<?php echo $cont?>git/git-original.svg"  class="tamanho" />
                        <img v-on:click="addGoal('typscript')" src="<?php echo $cont?>typescript/typescript-plain.svg"  class="tamanho" />
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="js/app.js"></script>
</x-layout>



