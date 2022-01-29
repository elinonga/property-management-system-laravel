@props(['property' => $property])

<!-- Property Box -->
<div class="property-grid ">
    <div class="to-thumb col-sm-4 p0">
        <img src="{{ asset('img/properties/' . $property->image) }}" alt="">
        <span class="spn-status"> For {{ $property->status }} </span>
        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
        <div class="user-preview">
            <a class="col" href="{{ route('user.properties', $property->user) }}">
                <img alt="Camilė" class="avatar avatar-small" src="{{ asset('img/agents/' . $property->user->avatar) }}" title="{{ $property->user->username }}">
            </a>
        </div>
        <a class="proeprty-sh-more-list" href="{{ route('view-property.show', $property->id) }}"><i class="ti ti-share"> </i></a>

    </div>
    <div class="to-details col-sm-8 p0">

        <div class="property-top-cnt">
            <h3><a href="{{ route('view-property.show', $property->id) }}" title="">{{ $property->title }}</a></h3>

            <div class="row">
                <div class="col-md-6">
                    <span class="price">${{ $property->price }} {{ $property->price_label }}</span>
                </div>
                <div class="col-md-6">
                    <p>Realtor: <a href="{{ route('user.properties', $property->user) }}">{{ $property->user->name }}</a></p>
                </div>
            </div>

            <p style="margin-top: 20px;">{{\Illuminate\Support\Str::limit($property->desc, 300)}}</p>

        </div>

        <div class="property-bottom-cnt">

            <ul class="property-info">

                <div class="col-md-8">
                    <li><i class="fa  fa-retweet"> </i> <span>{{ $property->area }} sqft </span> </li>
                    <li class="li-rl"></li>
                    <li><i class="fa  fa-bed"></i><span>  {{ $property->bedrooms }}   </span>   </li>
                    <li class="li-rl"></li>
                    <li><i class="fa  fa-building"> </i> <span>{{ $property->bathrooms }}   </span>  </li>
                    <li class="li-rl"></li>
                </div>


                <div class="col-md-4">
                    @can('delete', $property)
                        <div class="row">

                            <div class="col-md-4">
                                <!-- Edit -->
                                <a href="{{ route('view-property.edit', $property->id) }}">
                                    <button href="/" type="submit" class="btn btn-warning">Edit</button>
                                </a>
                            </div>

                            <div class="col-md-8">
                                <!-- Delete -->
                                <form action="{{ route('view-property.destroy', $property) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endcan
                </div>

            </ul>

        </div>
    </div>
</div>
