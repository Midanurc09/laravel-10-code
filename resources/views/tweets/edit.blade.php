<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         tweet
        </h2>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tweets.store') }}" method="post">
                        @csrf
                    <textarea name="content" class="textarea textarea-bordered w-full" placeholder="apa yang kamu pikirkan?"
                     rows="3">{{ $tweet->content }}</textarea>
                        <input type="submit" value="edit" class="btn btn-primary">
               </form>
             </div>
          </div>
    </x-slot>
</x-app-layout>