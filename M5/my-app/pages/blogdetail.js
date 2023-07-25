function BlogDetail({ post }) {
    return (
        <div>
            <h1>{post.title}</h1>
            <p>{post.body}</p>
        </div>
    );
}

export async function getServerSideProps(context) {
    const res = await fetch('https://jsonplaceholder.typicode.com/posts/1');
    const post = await res.json();
    return {
        props: {
            post,
        },
    };
}

export default BlogDetail;