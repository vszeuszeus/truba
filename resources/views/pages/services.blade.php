

            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sidebar one_quarter first">
                <!-- ################################################################################################ -->
                <h6>Категории услуг</h6>
                <nav class="sdb_holder">
                    <ul>
                        @foreach($category_serv as $category)
                            <li><a href="{{url('/services/'.$category->id)}}">{{$category->name}}</a>
                                @if(count($category->services))
                                    <ul>
                                        @foreach($category->services as $service)

                                            <li><a href="{{url('/services/'.$category->id.'/'.$service->id)}}">{{$service->name}}</a>
                                            </li>

                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
