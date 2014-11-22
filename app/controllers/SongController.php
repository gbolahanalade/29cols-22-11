<?php
class SongController extends BaseController
{
 
    /* get functions */
    public function index()
    {
        $songs = Song::orderBy('id','desc')->paginate(10);
       
        return View::make('song.songs',compact('songs'));
    }

    public function latest()
    {
        $songs = Song::orderBy('id','desc')->paginate(10);
        
        $this->layout->main = View::make('hhome')->nest('content','posts.latest',compact('posts'));
    }

    public function showSong(Song $song)
    {
        $reviews = $song->reviews()->with('user')->approved()->notSpam()->orderBy('created_at','desc')->paginate(20);
       
        return View::make('song.single')
        ->with('song',$song)
        ->with('reviews',$reviews);
    }

     public function showSongP(Song $song)
    {
        $reviews = $song->reviews()->with('user')->approved()->notSpam()->orderBy('created_at','desc')->paginate(10);
        $tags =$song->tags;
       
        return View::make('profile.single2')
        ->with('song','$song')
        ->with('reviews','$reviews')
        ->with('tag', '$tags');
    }

    public function getNew()
    {
        if (Auth::check()) {
        
        return View::make('profile.songs.upload2');
        }

        else {
            return Redirect::to('/profile/#error')->with('error', 'Please Login/ Signup to upload');
        }

     }

     public function postCreate()
     {
        $validator= Validator::make(Input::all(), Song::$rules);

        if ($validator->passes()) {
            $song =new Song;
            $song->title = Input::get('title');
            $song->description= Input::get('description');
            $song->soundcloud_link =Input::get('soundcloud');
            $song->youtube_link = Input::get('youtube');
            $song->tags = Input::get('tags');
            $song->genre =Input::get('genre');

            //$music = Input::file('song');
            //$song_file_name = date('Y-m-d-H:i:s')."-".$music->getClientOriginalName();
            //$music->move('upload/songs', $song_file_name); 

           // $song->song_url='uploads/songs/'.$song_file_name;
           

            //$music= Input::file('music');
            //$music_filename= date('Y-m-d-H:i:s').'-'.$music->getClientOriginalName();
            //$music->move('upload/songs', $music_filename);
            //$song->song_url='uploads/songs/'.$music_filename;


            /*$song_art= $_FILES['song_image'];
            $song_art_filename= date('Y-m-d-H:i:s').'-'.$song_art->getClientOriginalName();
            $path= public_path('img/songs/'.$song_art_filename);
            Image::make($song_art->getRealPath())->resize(468, 246)->save('public/img/songs/'.$song_art_filename);
            $song->image ='img/songs/'.$song_art_filename;
            $song->user()->associate(Auth::user());
            $song->save(); */

            $image = Input::file('song_image');
           // $filename = date('Y-m-d-H:i:s').'-'.$image->getClientOriginalName();
            $filename = str_random(12);
           // $desPath= public_path().'/uploads';
           $desPath=public_path('img/songs/');

            //$path= 'img/songs/'. $filename;
           // $filename =date('Y-m-d-H:i:s').'-'.$image->getClientOriginalName();
            //Image::make($image->getRealPath())->resize(468, 246)->save('public/'. $path);
            $upload_success =$image->move($desPath,$filename);

        
            $song->image ='img/songs/'.$filename; 
            $song->user()->associate(Auth::user());
            $song->save();   

            return Redirect::to('/profile')
            ->with('notice', 'New song added!!!');

        }
        return Redirect::to('/song/upload')
        ->with('error', $validator->messages())
        ->withInput(Input::except('song_image'));
        

    }

     

    public function newPost()
    {
        $this->layout->title = 'New Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.new');
    }
 
    public function editPost(Post $post)
    {
        $this->layout->title = 'Edit Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.edit', compact('post'));
    }
 
    public function deletePost(Post $post)
    {
        $post->delete();
        return Redirect::route('post.list')->with('success', 'Post is deleted!');
    }
 
    /* post functions */
    public function savePost()
    {
        $post = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($post, $rules);
        if ($valid->passes())
        {
            $post = new Post($post);
            $post->comment_count = 0;
            $post->read_more = (strlen($post->content) > 120) ? substr($post->content, 0, 120) : $post->content;
            $post->save();
            return Redirect::to('admin/dash-board')->with('success', 'Post is saved!');
        }
        else
            return Redirect::back()->withErrors($valid)->withInput();
    }
 
    public function updatePost(Post $post)
    {
        $data = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($data, $rules);
        if ($valid->passes())
        {
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->read_more = (strlen($post->content) > 120) ? substr($post->content, 0, 120) : $post->content;
            if(count($post->getDirty()) > 0) /* avoiding resubmission of same content */
            {
                $post->save();
                return Redirect::back()->with('success', 'Post is updated!');
            }
            else
                return Redirect::back()->with('success','Nothing to update!');
        }
        else
            return Redirect::back()->withErrors($valid)->withInput();
    }
 
}