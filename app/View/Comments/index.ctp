<!-- File: /app/View/Comments/index.ctp -->

<h1>Comment posts</h1>

<p><a href="/cake/users/logout">Logout</a></p>

<table>
    <tr>
        <th>Id</th>
        <th>Comment Text</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
<p><?php echo $this->Session->read('post_id'); ?></p>

    <?php foreach ($comments as $comment): ?>
    
    <tr>
        <td><?php echo $comment['Comment']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($comment['Comment']['body'], array('action' => 'view', $comment['Comment']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $comment['Comment']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $comment['Comment']['id'])); ?>
        </td>
        <td>
            <?php echo $comment['Comment']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>