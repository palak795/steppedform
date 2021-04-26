<span class="dropdown">
    <button id="btnSearchDrop12" type="button" class="btn btn-sm btn-icon btn-pure font-medium-2 btnSearchDrop12"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ft-more-vertical"></i>
    </button>
    <span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right" x-placement="bottom-end"
        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(55px, 27px, 0px);">
        <a class="dropdown-item" href="{{ $edit }}">
            <i class="ft-edit-2"></i>Edit
        </a>
        <a href="#" data-form_id="{{ 'delete_form_' . $exist->id }}" class="delete dropdown-item"><i
                class="ft-trash-2"></i>Delete
        </a>
        <form action="{{ $delete }}" method="post" id="{{ 'delete_form_' . $exist->id }}">
            @csrf
            @method('DELETE')
        </form>
    </span>
</span>
