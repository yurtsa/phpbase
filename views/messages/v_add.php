<main>
	<h1>Create new message</h1>
	<form method="post">
		<div class="form-group">
			<label for="msgFormName">Name</label>
			<input type="text" name="name" class="form-control" id="msgFormName" value="<?=$fields['name']?>">
		</div>
		<div class="form-group">
			<label for="msgFormText">Name</label>
			<textarea type="text" name="text" class="form-control" id="msgFormText"><?=$fields['text']?></textarea>
		</div>
		<button class="btn btn-success">Send</button>
		<div class="alert error-list">
		<? foreach($validateErrors as $error): ?>
			<p class="text-danger"><?=$error?></p>
		<? endforeach; ?>
		</div>		
	</form>
</main>