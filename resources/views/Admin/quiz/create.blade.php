<x-app-layout>
<x-slot name="header"> Admin.quiz-- Quiz oluştur ,,, create.blade</x-slot>

<div class="card">
    <div class="card-body">
        <form action="{{ route('elma.store') }}" method="POST" >
            @csrf
            <div class="form-group mb-3">
                <label for="">Quiz Başlığı</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="">Quiz Açıklama</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" id="isFinished"  @if(old('finished_at')) checked  @endif > 
                <label for=""> Bitiş Tarihi olacak mı?</label>
            </div>
            <div class="form-group" @if(!old('finished_at')) style="display:none" @endif  id="finishedInput">
                <label for="">Bitiş Tarihi</label>
                <input type="datetime-local" name="finished_at"  class="form-control" value="{{old('finished_at')}}"  >
            </div>
            <div class="form-group">
                
                <button type="submit" class="btn btn-success btn-sm btn-block form-control mt-3">Quiz oluştur</button>
            </div>
        </form>
    </div>
</div>

<x-slot name="js"> 
       <script>
      
              $('#isFinished').change(function(){
                // console.log("acmdvqajvopşlaqç");
                // alert('jquery fonksiyonu çalıştı') 
                if($('#isFinished').is(':checked'))
                {
                    $('#finishedInput').show();
                }
                else
                {
                    $('#finishedInput').hide(); 
                }

              
              })
        </script>
</x-slot>

</x-app-layout>