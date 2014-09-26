<table>
    <th>title</th>
    <th>category</th>
    <th>posted by</th>
    <tbody>
<?php foreach ($posts as $post): ?>
    <td><?php echo $post['Post']['title']; ?></td>
<td><?php echo $post['Category']['name']; ?></td>
<td><?php echo $post['User']['username']; ?></td>
<?php endforeach; ?>
  </tbody>


</table>

