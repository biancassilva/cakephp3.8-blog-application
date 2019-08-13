<?php ?>


<h1>Blog articles</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?=$article->id?></td>
        <td>
            <?=$this->Html->link($article->title, ['action' => 'view', $article->id])?>
        </td>
        <td>
            <?=$article->created->format(DATE_RFC850)?>
        </td>
    </tr>
    <?php endforeach;?>
</table>