<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>


<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<p><?php echo $this->Html->link(
    'View Comments',
    array('controller' => 'comments', 'action' => 'index')
);
?></p>
