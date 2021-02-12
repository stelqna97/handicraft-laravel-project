<h3 class="product-title">Laravel 5.5 Ratting System</h3>
                                        <div class="rating">
                                            <form action="{{route('ratting.store')}}"  method="post" >
                                            {{ csrf_field() }}
                                            <input id="ratings-hidden" name="rating" type="hidden"> 
                                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                            <input id="input-1" name="star" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="" data-size="xs">
                                            <input type="hidden" name="product_id" required="" value="{{ $product->id }}">
                                            <input type="hidden" name="user_id" required="" value="{{ auth()->user()->id }}">
                                            <br/>
                                            <button class="btn btn-success">Submit Review</button>
                                          </form>
                                        </div>
                                    </div>
                                    </div>