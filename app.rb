require 'sinatra'
require 'sinatra/minify'
class Main < Sinatra::Base
  register Sinatra::Minify
end