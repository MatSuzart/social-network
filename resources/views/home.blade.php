@extends('template')

@section('body')
<div class="row">
	<div class="col-sm-8">

		<div class="post_area">
			<form method="POST" enctype="multipart/form-data" action="createPost">
			{{ csrf_field() }}
				<h4>O que você está pensando?</h4>
				<textarea name="post" class="form-control"></textarea><br/>
				<input type="file" name="foto" /><br/>
				<input type="submit" value="Enviar" class="btn btn-default" />
			</form>
		</div>
		<div class="feed">
    	</div>
	</div>
	<div class="col-sm-4">
		@foreach($rel as $r)
		<div class="widget">
			<h4>Requisições de amizade</h4>
			<div class="requisicaoitem">
				<strong>{{$r->id}}</strong>
			</div>
		</div>
		@endforeach                
		<div class="widget">
			<h4>Total de Amigos</h4>
		</div>

		<div class="widget">
			<h4>Sugestões de amigos</h4>
			<div class="sugestaoitem">
				<strong></strong>
			</div>
		</div>

		<div class="widget">
			<h4>Grupos</h4>
			<form method="POST">
				<div class="input-group">
					<input type="text" name="grupo" class="form-control" placeholder="Nome do grupo" />
					<span class="input-group-btn">
						<input type="submit" value="Criar" class="btn btn-default" />
					</span>
				</div>
			</form>
			<a href=""></a>
		</div>
	</div>
</div>
@endsection