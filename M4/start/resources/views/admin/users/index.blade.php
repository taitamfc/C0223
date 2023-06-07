<h1>Admin user's Page</h1>

<ul>
<?php foreach( $users as $user ): ?>
<li><?= $user;?></li>
<?php endforeach; ?>
</ul>

<ul>
@foreach( $users as $user )
<li>{{ $user }}</li>
@endforeach
</ul>
