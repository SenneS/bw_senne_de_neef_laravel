<x-layout-default>

    <!-- Header - set the background image for the header in the line below-->
    <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="/assets/profile/{{$user->avatar}}" alt="..." />
            <h1 class="text-white fs-3 fw-bolder">{{$user->first_name}} {{$user->last_name}} (&#64;{{$user->username}})</h1>
            <p class="text-white-50 mb-0">{{$user->biography}}</p>
        </div>
    </div>

    <div>
        <a href="{{route("profile.edit")}}" class="mt-5 form-control btn btn-warning">Edit My Profile</a>
    </div>


    <div class="container px-4 px-lg-5 mt-5">
        <hr/>
        <h2>My Projects</h2>
        <hr/>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <a href="{{route("project.create")}}" class="h-100 btn-lg align-content-center btn text-center btn-success">Create New Project</a>
                </div>
            </div>

            @foreach($projects as $project)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Project image-->
                        <img class="card-img-top" src="/assets/project/{{$project->thumbnail}}" alt="..." />
                        <!-- Project details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Project name-->
                                <h5 class="fw-bolder">{{$project->title}}</h5>
                                <!-- Project description -->
                                {{$project->content}}
                            </div>
                        </div>
                        <!-- Project actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent align-self-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('project.show', $project->id)}}" class="btn btn-success">View</a>
                                <a href="{{route('project.edit', $project->id)}}" class="btn btn-warning">Edit</a>
                                <form method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('project.delete', $project->id)}}" class="btn btn-danger">Delete</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-layout-default>
