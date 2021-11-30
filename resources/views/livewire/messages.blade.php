<div>
  <section class="content">
    <!-- Main content -->
    <div class="row">
      <div class="col-lg-3 col-12">
        <div class="box">
          <div class="box-header my-0">
            <h4 class="box-title">
              Online
            </h4>
          </div>
          <div class="box-body px-0">
            <div class="notification-side">
              @foreach ($users as $user)
              <a wire:click="getUser({{$user->id}})" class="hover-primary" style="cursor: pointer">
                <span class="avatar avatar-sm status-success"></span>
                <strong>{{$user->name}}</strong>
              </a> <br>
              @endforeach
              {{-- <a class="hover-primary" href="#">
                <span class="avatar avatar-sm status-success"></span>
                <strong>News</strong>
              </a> <br>
              <a class="hover-primary" href="#">
                <span class="avatar avatar-sm status-success"></span>
                <strong>Blog</strong>
              </a> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-12">
        <div class="box">
          <div class="box-header">
            @if (isset($sender))
            <div class="media align-items-top p-0">
              <span class="avatar avatar-lg status-success mx-0">
                <img src="{{asset('frontend/images/avatar/2.jpg')}}" class="rounded-circle" alt="...">
              </span>
              <div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
                <div class="media-body mb-lg-0 mb-20">
                  <p class="fs-16">
                    <a class="hover-primary" href="#"><strong>{{$sender->name}}</strong></a>
                  </p>
                  <p class="fs-12">Last Seen 10:30pm ago</p>
                </div>
              </div>
            </div>
            @endif
            {{-- @error('receiver_id') <span class="text-danger">{{ $message }}</span> @enderror --}}
          </div>

          <div class="box-body">
            <div class="chat-box-one" style="overflow: hidden; width: auto; height: 550px;">
              @if(filled($allmessages))
              @foreach($allmessages as $allmessage)
              <div class="card d-inline-block mb-3 float-start me-5 no-shadow bg-lighter max-w-p80">
                <div class="position-absolute pt-1 pe-5 r-0">
                  <span class="text-muted">09:25</span>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-row pb-2">
                    <a class="d-flex" href="#">
                      <img alt="Profile" src="{{asset('frontend/images/avatar/1.jpg')}}" class="avatar me-10">
                    </a>
                    <div class="d-flex flex-grow-1">
                      <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                        <div>
                          <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-text-left ps-55">
                    <p class="mb-0">{{$allmessage->message}}</p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              @endforeach
              @endif
              {{-- <div class="card d-inline-block mb-3 float-start me-5 no-shadow bg-lighter max-w-p80">
                <div class="position-absolute pt-1 pe-5 r-0">
                  <span class="text-muted">09:25</span>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-row pb-2">
                    <a class="d-flex" href="#">
                      <img alt="Profile" src="{{asset('frontend/images/avatar/1.jpg')}}" class="avatar me-10">
                    </a>
                    <div class="d-flex flex-grow-1">
                      <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                        <div>
                          <p class="mb-0 fs-16 text-dark">Sarah Kortney</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-text-left ps-55">
                    <p class="mb-0">What do you think about our plans for this product launch?</p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="card d-inline-block mb-3 float-end me-5 bg-primary max-w-p80">
                <div class="position-absolute pt-1 ps-5 l-0">
                  <span>09:41</span>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-row pb-2">
                    <div class="d-flex flex-grow-1 justify-content-end">
                      <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                        <div>
                          <p class="mb-0 fs-16">Mimi Carreira</p>
                        </div>
                      </div>
                    </div>
                    <a class="d-flex" href="#">
                      <img alt="Profile" src="{{asset('frontend/images/avatar/2.jpg')}}" class="avatar ml-10">
                    </a>
                  </div>
                  <div class="chat-text-left pe-50">
                    <p class="mb-0">I would suggest you discuss this further with the advertising team.</p>
                  </div>
                </div>
              </div> --}}
              
            </div>

          </div>
          <div class="box-footer">
            <form wire:submit.prevent="sendMessage">
              <div class="d-md-flex d-block justify-content-between align-items-center">
                <input class="form-control b-0 py-10" type="text" wire:model="message" placeholder="Say something..."
                  autocomplete="off">
                <div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
                  <button type="submit" class="waves-effect waves-circle btn btn-circle btn-primary">
                    <i class="mdi mdi-send"></i>
                  </button>
                </div>
              </div>
            </form>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->

  </section>
</div>