<div class="box-body">
    <div class="form-group has-feedback{{ $errors->has('nip') ? ' has-error' : '' }}">
        {!! Form::label('nip', 'NIP') !!}

        {!! Form::text('nip', null, ['class' => 'form-control', 'placeholder' => 'NIP']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group has-feedback{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
        {!! Form::label('nama_lengkap', 'Nama Lengkap') !!}

        {!! Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
        {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group has-feedback{{ $errors->has('alamat') ? ' has-error' : '' }}">
        {!! Form::label('alamat', 'Alamat') !!}

        {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group has-feedback{{ $errors->has('telepon') ? ' has-error' : '' }}">
        {!! Form::label('telepon', 'Telepon') !!}

        {!! Form::text('telepon', null, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}
        {!! $errors->first('telepon', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Email') !!}

        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group has-feedback{{ $errors->has('nama_pengguna') ? ' has-error' : '' }}">
        {!! Form::label('nama_pengguna', 'Nama Pengguna') !!}

        {!! Form::text('nama_pengguna', null, ['class' => 'form-control', 'placeholder' => 'Nama Pengguna']) !!}
        {!! $errors->first('nama_pengguna', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group has-feedback{{ $errors->has('katasandi') ? ' has-error' : '' }}">
        {!! Form::label('katasandi', 'Kata Sandi') !!}

        {!! Form::text('katasandi', null, ['class' => 'form-control', 'placeholder' => 'Kata Sandi']) !!}
        {!! $errors->first('katasandi', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group row">
        <div class="col-sm-2"><b>Aktif</b></div>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <!-- <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                </label> -->
            </div>
        </div>
    </div>
    <!-- <div class="form-group has-feedback{{ $errors->has('aktif') ? ' has-error' : '' }}">
        {!! Form::label('aktif', 'Aktif') !!}

        {!! Form::text('aktif', null, ['class' => 'form-control', 'placeholder' => 'Aktif']) !!}
        {!! $errors->first('aktif', '<p class="help-block">:message</p>') !!}
    </div> -->
<!-- /.box-body -->

<div class="box-footer">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
</div>
