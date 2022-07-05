
                        <div class="mb-4">
                                {!! Form::label('title', 'Titulo del curso') !!}
                                {!! Form::text('title', null, ['class' => 'form-input block w-full mt-2' . ($errors->has('title') ? ' border-red-600' : '')]) !!}

                                @error('title')
                                    <strong class="text-xs text-red-600">{{$message}}</strong>
                                @enderror
                        </div>

                        <div class="mb-4">
                                {!! Form::label('slug', 'Url del curso') !!}
                                {!! Form::text('slug', null, ['readonly'=> 'readonly', 'class' => 'form-input block w-full mt-2 ' . ($errors->has('slug') ? ' border-red-600 ' : '')]) !!}

                                @error('slug')
                                    <strong class="text-xs text-red-600">{{$message}}</strong>
                                @enderror
                        </div>

                        <div class="mb-4">
                                {!! Form::label('subtitle', 'Subtitulo del curso') !!}
                                {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-2' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}

                                @error('subtitle')
                                    <strong class="text-xs text-red-600">{{$message}}</strong>
                                @enderror
                        </div>

                        <div class="mb-4">
                                {!! Form::label('description', 'Descripcion del curso') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-input block  w-full mt-2']) !!}

                                @error('description')
                                    <strong class="text-xs text-red-600">{{$message}}</strong>
                                @enderror
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                {!! Form::label('category_id', 'Categoria:') !!}
                                {!! Form::select('category_id', $categorias, null, ['class' => 'form-input block  w-full mt-2']) !!}
                            </div>

                            <div>
                                {!! Form::label('level_id', 'Grados académico:') !!}
                                {!! Form::select('level_id', $niveles, null, ['class' => 'form-input block  w-full mt-2']) !!}
                            </div>

                            <div>
                                {!! Form::label('price_id', 'Precio:') !!}
                                {!! Form::select('price_id', $precios, null, ['class' => 'form-input block  w-full mt-2']) !!}
                            </div>
                        </div>

                        <h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

                        <div class="grid grid-cols-2 gap-4">
                            <figure>
                                @isset($course->image)
                                    <img id="picture" class="w-full h-70 object-cover object-center" src="{{ asset('/storage/'.$course->image->url)}}" alt="">
                                @else
                                    <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/6368912/pexels-photo-6368912.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                @endisset
                            </figure>

                            <div>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab beatae sunt nihil ronem ullamimus, expedita eligendi.</p>
                                {!! Form::file('file', ['class' =>'form-input w-full' . ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept'=>'image/*']) !!}
                                @error('file')
                                    <strong class="text-xs text-red-600">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
