<div class="container">
    <h1>Danh sách công việc</h1>
    <div>
        @foreach($list as $work)
            <p>{{ $work['name'] }}</p>
            @if ($work['status'] == 0)
                <span>Chưa làm</span>
            @elseif ($work['status'] == 1)
                <span>Đã hoàn thành</span>
            @elseif ($work['status'] == 2)
                <span>Không thực hiện</span>
            @endif
            <br>
            <br>
        @endforeach
    </div>
</div>
