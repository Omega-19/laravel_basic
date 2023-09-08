<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenue {{$user}} 😎😎😎 !</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, molestias cum suscipit voluptas rerum natus
        possimus repellat placeat voluptatem iusto quaerat ratione quam nulla soluta, explicabo sint culpa. Laboriosam
        facilis cumque vitae eveniet rerum nostrum.</p>
    <h2>MIAOUUUUUUUUUUU</h2>
    <p>MIAOUUUUUUUUUUU est une Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid architecto voluptatem
        nostrum omnis placeat, asperiores consectetur corrupti dolor neque nulla aperiam voluptatibus laboriosam. Animi
        cum veniam cumque! Aperiam itaque quia optio quod. Cupiditate nam suscipit sequi, non modi laudantium quia? ceci
        étant il urge que vous soyez Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iste aperiam
        fugiat magnam eaque eius.</p>
    <h3>SAM-ROD</h3>
    <p>Raison pour laquelle il préfère grrrrrrrrrrrrrrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
        rrrrrrrrrrrrrrrrrrrrrrrrrrrr et voila l'effet que sa donne sit amet consectetur adipisicing elit.</p>
    <pre>
        {{ var_dump($articles)}}
    </pre>
    <section>
        <!-- avec blade on remplace les php par @ -->
        <h2>Liste des artistes</h2>
        @if (count($articles) > 0) 
        @foreach ($articles as $article) 
            <article>
                <h3>
                   {{$article["title"] }}
                </h3>
                <p>
                 {{$article["description"]}} 
                </p>
            </article>
        @endforeach
        @else
        <p>Pas d'article pour le moment</p>
        @endif
    </section>
</body>

</html>