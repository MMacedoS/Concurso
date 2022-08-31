<div class="row noprint">

    @if(@$pageSlug != 'inscricao')
        <div class="col-12 right itens">
            <a href="{{ route('concurso') }}" class="secondary noprint" type="submit">Criar Concurso</a>
            <a href="{{ route('cidade') }}" class="primary noprint" type="submit">Criar Cidade</a>
            <a href="{{ route('estado') }}" class="primary noprint" type="submit">Criar Estado</a>
            <a href="{{ route('inscricao') }}" class="primary noprint" type="submit">Candidatar-se</a>
        </div>
    @endif
</div>
