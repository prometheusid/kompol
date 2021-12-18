from flask import Flask, render_template

app = Flask(__name__)


@app.route("/")
def index():
    return render_template('index.html')

@app.route("/forum")
def forum():
    return render_template('forum/index.html')

@app.route("/forum")
def forumdetail():
    return render_template('forum/forumdetail.html')
