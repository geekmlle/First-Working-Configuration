<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>

<p><a href="/cake/users/logout">Logout</a></p>

<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php 
            	//$this->Session->write('PostID', $post['Post']['id']);
            	echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); 
        	?>
        	<?php echo $this->Session->read('PostID');?>
        </td>
        <td>
            <?php 
            	if($post['Post']['user_id'] == $this->Session->read('Auth.User.id')){
            		echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' => 'Are you sure?'));
            	}
            ?>
            <?php 
            	if($post['Post']['user_id'] == $this->Session->read('Auth.User.id')){
            		echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));
            	}
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>